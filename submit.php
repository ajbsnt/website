<?php
session_start();

 $email=$_POST["email"];
 $password=$_POST["password"];

 if($email=="admin@admin.com" && $password=="password"){

$_SESSION["user"] = "admin@admin.com";
echo "Logged in successfully.<a href='./index.php'> Click Here </a>";

 }
 else{
     echo "Username and password not matched.";
 }
?>