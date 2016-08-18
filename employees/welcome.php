<!DOCTYPE html>
<html>

<head>
    <title>Welcome Admin</title>
</head>

<body>
    <h1>Welcome <?php echo $login_session; ?></h1>
    You are arrive at <?php $time = date('m/d/y G.i:s<br>', time()); echo "$time"?>
</body>

</html>
