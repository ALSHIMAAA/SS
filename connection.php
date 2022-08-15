<?php

	$dsn='mysql:host=localhost;dbname=beautydb'; // مصدر قاعدة البيانات : اسم قاعده البيانات و اسم السرفر
	$user='root'; // اسم المستخدم للاتصال بقاعده البيانات وهو اسم افتراضي
	$pass=''; // كلمة السر للاتصال بقاعده البيانات وهي افتراضية
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);// ترميز قاعده البيانات لتدعم اللغه العربية
  
	try{
	   
	    $conn=new PDO($dsn,$user,$pass,$options); // البدء ب الاتصال بقاعده البيانات باستخدام كلاس بي دي او هذا الكلاس موجود ضمن لغة بي اتش بي 
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // في حاله حصول خطاء في الاتصال
        
       
	}
	
	catch(PDOExcepction $error) {
	    
	    echo "error".$error->getMessage(); // عرض رساله الخطاء في حاله حصول خطاء في الاتصال بقاعدة البيانات
	}

?>