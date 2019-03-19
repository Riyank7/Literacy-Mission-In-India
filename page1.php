
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<fieldset>
<center>
<h1 style="background-color:DodgerBlue;">WELCOME!!<br></h1>
<?php
echo "<h3>"."Today's Date :" . date("d/m/Y") . "<br>"."</h3>";
echo "<h3>"."Today's Day :" . date("l")."<br>"."</h3>";
date_default_timezone_set("Asia/Calcutta");
echo "<h3>"."The time in " . date_default_timezone_get() . " is " . date("H:i:s")."</h3>"; 
?>
</center>
</fieldset>
  <div class="header">
  	<h2 style="background-color:Tomato;">Login</h2>
  </div>
	 
  <form method="post" action="userlogin.php">
  	
  	<div class="input-group">
  		<h2 style="background-color:Azure;"><a href="userlogin.php">USER</a></h2>
  		
  	</div>
  	<div class="input-group">
  		<h2 style="background-color:Azure;"><a href="adminlogin.php">ADMIN</a></h2>
  	
  	</div>
  	</div>
  </form>
</body>
</html>
<fieldset>
<center>
<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "Number of Users who have visited the page : ".  $_SESSION['counter'];
  echo ( $msg ); 
  ?>
  <center>
  </fieldset>