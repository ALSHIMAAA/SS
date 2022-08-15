<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>انشاء حساب</title>
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
                        <h2>انشاء حساب</h2>
                    </div>

                </div>


            </div>
        </div>
    </div><!-- End // .slider -->

    <div class="myform">

        <!-- <form action="#" method="post"> -->
        <p>
            <label>اسم المستخدم</label>
            <input type="text" id="username" placeholder="اسم المستخدم">
        </p>
        <p>
            <label>الايميل</label>
            <input type="text" id="email" placeholder="الايميل">
        </p>
        <p>
            <label>رقم الهاتف</label>
            <input type="number" id="phone" placeholder="رقم الهاتف">
        </p>
        <p>
            <label>كلمة المرور</label>
            <input type="password" id="pass" placeholder="كلمة المرور">
        </p>
        <p>
            <label>تاكيد كلمة المرور</label>
            <input type="password" id="confirm_password" placeholder="تاكيد كلمة المرور">
        </p>
        <b>
            <input type="button" class="re" onclick="registerUser()" value="تسجيل">
        </b>
        <p id="msg"></p>
    </div>

    <footer>
        جميع الحقوق محفوظة لموقع عالم الجمال 2022
    </footer>
    <script src="js/main.js"></script>
</body>

</html>