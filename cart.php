<?php
    include 'connection.php'; 
    $order=1;
if (isset($_POST["btn_remove"])){
    $pro_id = $_GET["proID"];
    $query = "DELETE FROM cart WHERE product_id	 = '$pro_id'";
    $statement = $conn->prepare($query);
    $statement->execute();
        
    if($statement->rowCount()) {    
        echo '<script>window.location = "cart.php"</script>';
    }
}

  if (isset($_POST["btn_order"])){
    $query = "truncate table cart";
    $statement = $conn->prepare($query);
    $statement->execute();
     $order=0;
     //order successfully message
     echo '<script>alert("تمت عملية الطلب بنجاح")</script>';
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Horizon</title>
</head>

<body dir="rtl">
    <header class="sub_page_content_header">
        <nav>
            <h1>عالم الجمال</h1>
            <ul class="nav_bar_item">
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="who-we-are.html">من نحن</a></li>
                <li class="has_children"><a href="#">منتجاتنا</a>
                    <ul class="children_of_li">
                        <li><a href="product.php?catid=1">عطور</a></li>
                        <li><a href="product.php?catid=2">مكياج</a></li>
                        <li><a href="product.php?catid=3">صبغات</a></li>
                        <li><a href="product.php?catid=4">كريمات ومرطبات</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">تواصل معنا</a></li>
                <li><a href="login.php">تسجيل دخول</a></li>
                <li><a href="register.php">إنشاء حساب</a></li>

            </ul>
        </nav>
    </header>
    <div class="slider">
        <div class="slide_viewer slide_of_sub_page">
            <div class="slide_group">

                <div class="slide" style="background-image: url('img/slide1.jpg');">
                    <div class="desc_of_slide">
                        <h2> سلة التسوق</h2>
                    </div>

                </div>


            </div>
        </div>
    </div><!-- End // .slider -->

    <div class="cart">
        <table class="cart__table cart-table">

            <div class="cart-title">
                <h2>
                    سلتي
                </h2>
            </div>
            <thead class="cart-table__head">
                <tr>
                    <th class="cart-table__column">اسم المنتج</th>
                    <th class="cart-table__column ">السعر</th>
                    <th class="cart-table__column ">الصورة</th>
                    <th class="cart-table__column">

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
        $total = 0;
        $count = 0;
        $query = "SELECT * FROM product INNER JOIN cart ON cart.product_id = product.id";
        $statement = $conn->prepare($query);
        $statement->execute();
        if($statement->rowCount()){
            foreach($statement as  $row){
                $total = $total + $row[4];
            echo'
              <form method="POST" action="cart.php?action=add&proID='.$row[0].'">

              <tr class="cart-table__row">
              <td class="cart-table__column">
                  <a href="#" >'.$row[1].'</a>
      
              </td>
              
              <td class="cart-table__column" id="pri" data-title="Price">'.$row[4].' رس </td>
              <td class="cart-table__column">
              <a href="#">
                  <img src="data:image/jpeg;base64,'.base64_encode($row['3'] ).'" height="149" width="185"/>
              </a>
          </td>
              <td class="cart-table__column ">
                  <button type="submit" name="btn_remove">
                      حذف
                  </button>
              </td></tr>
              </form>
                ';
            }
        }
           
   ?>

            </tbody>
        </table>

        <div class="card">
            <table class="cart__totals">
                <thead class="cart__totals-header">
                <tfoot class="cart__totals-footer">
                    <tr>
                        <th>
                            <?php echo 'المجموع الكلي: '.$total.' رس '?>
                        </th>
                    </tr>
                </tfoot>
            </table>
            <form method="post" action="cart.php" style="display: inline;">
                <button type="submit" class="btn-pyment" name="btn_order">طلب</button>
            </form>

        </div>
    </div>

    <footer>
        جميع الحقوق محفوظة لموقع عالم الجمال 2022
    </footer>
</body>

</html>
