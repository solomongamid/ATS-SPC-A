<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome Admin</title>
      <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   
   <body>
   	 <div class="mdl-layout mdl-js-layout">
   	 <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
   	 <a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">logout</a> 

            <h2 class="mdl-card__title-text" >Accenture Attendance App</h2>
      </div>
         
      <h1>Welcome <?php echo $login_session; ?></h1> 

     You are arrive at <?php $time = date("m/d/y G.i:s<br>", time()); echo "$time" ?><br>
     <?php $CURRENTTIME = new DateTime($data['current_time']);
    		$OFFICETIME  = new DateTime('10:00:00');
          	$ABSENTIME = new DateTime('12:20:00');
   			 if ($CURRENTTIME  > $OFFICETIME && $CURRENTTIME < $ABSENTIME) {
      			 echo 'you are late tody';
   			 }  elseif ($CURRENTTIME > $ABSENTIME) {
    			echo "you are absente today";
  		     } else {
     		    echo 'Thank you for being on time';
  			 }
   ?>
   </div>
   



   </body>
   
</html>