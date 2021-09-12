<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

if ($email != null && $password != null) {
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    echo "Registered Sucessfully. Login form <a href='./form.php'>Here</a>";
} else {
?>

    <html>
    <form method="POST">
        <div>
            <h1>Sign Up</h1>
            <div>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>
            </div>
            <div>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <br />
            <div>
                <button type="submit">Sign Up</button>
            </div>
        </div>
    </form>

    </html>

<?php } ?>