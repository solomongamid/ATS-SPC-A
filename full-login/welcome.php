<?php
     include 'session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Admin</title>
</head>

<body>
    <h1>Welcome <?php echo $login_session; ?></h1>
    <h2><a href = "logout.php">Sign Out</a></h2>
    <h2><a href = "signup.php">Registration</a></h2>
    <h2><a href = "process.php">Employees data</a></h2>
</body>

</html>
