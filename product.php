<?php
include 'connection.php'; //استدعاء ملف الاتصال بقاعدة البيانات

// اضافه المنتجات الى سلة التسوق
if (isset($_POST["btn_add"])){
	$pro_id = $_GET["proID"];
	$query = "INSERT INTO cart (product_id) VALUES ('$pro_id')";
    $statement = $conn->prepare($query);
    $statement->execute();
  
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>المنتجات</title>
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
                        <h2>منتجاتنا</h2>
                    </div>

                </div>


            </div>
        </div>
    </div><!-- End // .slider -->

    <!-- <div class="slide_buttons">
      </div> -->


    <section class="product_content">
        <div class="product_section_title">
            <div class="container_section">

                <?php
            $catId = $_GET['catid'];
            $count = 0;
            $query = "SELECT * FROM product where idCategory = '$catId'";
            $statement = $conn->prepare($query);
            $statement->execute();
            if($statement->rowCount()){
                foreach($statement as  $row){
                    echo'
                    <form method="POST" action="product.php?catid='.$catId.'&proID='.$row[0].'" style="display: inline;">
                      <div class="card">
                          <div class="img_of_card">
                              <img src="data:image/jpeg;base64,'.base64_encode($row['3'] ).'"style="width:100%;height:250px;">
                          </div>
                          <div class="card_body">
                              <h3><a href="">'.$row[1].'</a></h3>
                              <p>'.$row[2].'</p>  
                              <strong class="mony_of_product"> <span><a href="">'.$row[4].' رس </a></span></strong>
                              <div class="card_button">
                                  <button name="btn_add">اضف الى السلة</button>
                              </div>
                          </div>
                      </div>
                    </form>
                      ';
                }
            
            }

       ?>


            </div>
        </div>
        <a class="btn-pyment" href="cart.php"> سلتي</a>
    </section>
    <footer>
        جميع الحقوق محفوظة لموقع عالم الجمال 2022
    </footer>

</body>

</html>