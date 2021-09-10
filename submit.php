<?php

$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "admin@admin.com" && $password == "password") {
    echo "Logged In";
} else {
    echo "Invalid Email";
}
// echo $email."<br/>";
// echo $password."<br/>";
