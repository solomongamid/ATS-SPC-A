<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   mysql_query("INSERT INTO user(id, username, last_seen) VALUES ('', 'bkrpan', NOW()) "); 
   $ses_sql = mysqli_query($db,"SELECT username from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:logIn.php");
   }
?>