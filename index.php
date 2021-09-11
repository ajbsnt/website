<?php
session_start();

if ($_SESSION["user"] != null) {
    echo "WELCOME BACK!!!" . $_SESSION["user"];
    echo "<a href='./logout.php'>LOGOUT</a>";
} else {    ?>


    <p>WELCOME!!! Please Login in <a href="./form.php">HERE</a> </p>
    <br>
    <p>Don't have an account? Sign Up<a href="./signup.php">HERE</a></p>

<?php } ?>