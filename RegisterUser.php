<?php
    include 'connection.php'; 
    
        
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
            $statement = $conn->prepare($query); 
            $statement->execute();   
            echo  "تم انشاء الحساب بنجاح";
        }
                
    
  
?>
