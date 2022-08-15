function registerUser(){
    var x=new XMLHttpRequest();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var pass = document.getElementById("pass").value;
    var confirm_password = document.getElementById("confirm_password").value;
    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){
            document.getElementById("msg").innerHTML=x.responseText;
            username = document.getElementById("username").value="";
            email = document.getElementById("email").value="";
            phone = document.getElementById("phone").value="";
            pass = document.getElementById("pass").value="";
            confirm_password = document.getElementById("confirm_password").value="";
        }
    };
    x.open("POST","RegisterUser.php?username="+username+"&email="+email+"&phone="+phone+"&pass="+pass+"&confirm_password="+confirm_password,true);
    x.send();
}