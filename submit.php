<?php
session_start();

 $email=$_POST["email"];
 $password=$_POST["password"];


if($email==$_SESSION["email"] && $password==$_SESSION["password"]){

$_SESSION["user"] = $_SESSION["email"];
echo "Logged in successfully.<a href='./index.php'> Click Here </a>";

 }
 else{
     echo "Username and password not matched.";
 }
?>