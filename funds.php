<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>District</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Enter the details</h2>
  </div>
	 
  <form method="post" action="funds.php">
  <?php include('error.php'); ?>
  	
  	<div class="input-group">
  		<label>District Code</label>
  		<input type="text" name="dist_code">
  	</div>

	<div class="input-group">
  		<label>Government Sector</label>
  		<input type="text" name="gs" >
  	</div>
	<div class="input-group">
  		<label>Government Funds</label>
  		<input type="text" name="gf" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="funds">Submit</button>
  	</div>
  </form>
</body>
</html>