
<html>

   <head>
      <title>Bienvenue Admin</title>
   </head>

   <body>
      <h1>Bienvenue<?php echo $login_session; ?></h1>
  vous êtes arrivés à <?php $time = date("m/d/y G.i:s <br>", time()); echo "$time"?>
   </body>

</html>
