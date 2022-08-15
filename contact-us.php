<?php
    include 'connection.php'; //استدعاء ملف الاتصال بقاعدة البيانات
    
    if(isset($_POST['send'])) {
        
        $Uname=$_POST['username'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];
            
        $query = "INSERT INTO contact(username,email,mesg) VALUES ('$Uname','$email','$msg')";
        $statement = $conn->prepare($query); //$conn هو ابجيكت الاتصال بقاعده البيانات قمنا بانشاءه في ملف الاتصال بقاعده البيانات
        $statement->execute(); //تنفيذ جملة الادخال
        echo  " <script type=\"text/javascript\"> alert('تم ارسال طلبك بنجاح سيتم الرد على طلبك في اقرب وقت')</script>";
                
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
                        <h2>تواصل معنا</h2>
                    </div>

                </div>


            </div>
        </div>
    </div><!-- End // .slider -->

    <div class="myform">
        <form action="#" method="post">
            <p>
                <label>اسم المستخدم</label>
                <input type="text" name="username" placeholder="اسم المستخدم">
            </p>

            <p>
                <label>الايميل</label>
                <input type="text" name="email" placeholder="الايميل">
            </p>

            <p>
                <label>محتوى الرساله</label>
                <textarea name="msg"></textarea>
            </p>

            <p>
                <input type="submit" name="send" value="ارسال">
            </p>



        </form>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </div>
    <footer>
        جميع الحقوق محفوظة لموقع عالم الجمال 2022
    </footer>
</body>

</html>