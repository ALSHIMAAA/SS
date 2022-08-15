<?php
    include 'connection.php'; //استدعاء ملف الاتصال بقاعدة البيانات
    
        
        // $Uname=$_POST['username'];
        // $email=$_POST['email'];
        // $pass=$_POST['pass'];
        // $phone=$_POST['phone'];
        // $confPass=$_POST['confirm_password'];
        $username=$_GET['username'];
        $email=$_GET['email'];
        $pass=$_GET['pass'];
        $phone=$_GET['phone'];
        $confPass=$_GET['confirm_password'];
        if($pass != $confPass){
            
              echo  "كلمة السر غير متطابقة";
        }
        else {
            
            $query = "INSERT INTO users(username,email,phon,pass) VALUES ('$username','$email','$phone','$pass')";
            $statement = $conn->prepare($query); //$conn هو ابجيكت الاتصال بقاعده البيانات قمنا بانشاءه في ملف الاتصال بقاعده البيانات
            $statement->execute(); //تنفيذ جملة الادخال
            echo  "تم انشاء الحساب بنجاح";
        }
                
    
  
?>