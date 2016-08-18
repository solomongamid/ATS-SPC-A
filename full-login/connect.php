<?php

include 'config.php';
session_start();

function NewUser()
{
    $fullname = $_POST['name'];
    $lastname = $_POST['lastname'];
    $userName = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "INSERT INTO users (first_name,last_name,user_name,email,user_password) VALUES ('$fullname','$lastname','$userName','$email','$password')";
    $data = mysql_query($query) or die(mysql_error());
    if ($data) {
        echo 'YOUR REGISTRATION IS COMPLETED...';
    }
}

function SignUp()
{
    if (!empty($_POST['user'])) {
    //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
    $query = mysql_query('SELECT user_name FROM users ');
        if ($query != '$_POST[user]') {
            newuser();
        } else {
            echo 'SORRY...YOU ARE ALREADY REGISTERED USER...';
        }
    }
}
if (isset($_POST['submit'])) {
    SignUp();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Admin</title>
</head>

<body>
    <h2><a href = "logout.php">Sign Out</a></h2>
    <h2><a href = "signup.php">Registration</a></h2>
    <h2><a href = "process.php">Employees data</a></h2>
</body>

</html>
