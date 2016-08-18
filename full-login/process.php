<!DOCTYPE html>
<html>

<body>
<?php
include 'config.php';
session_start();

$sql = 'SELECT id, user_name, reg_date FROM users ';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<br> id: '.$row['id'].' - Name: '.$row['user_name'].'you arrive at '.$row['reg_date'].'<br>';
        // "Today is " . date("Y/m/d") . date("l") ."<br>"; for show the date
    }
} else {
    echo '0 results';
}

$conn->close();
?>
</body>

</html>
