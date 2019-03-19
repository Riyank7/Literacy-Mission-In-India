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
	 
  <form method="post" action="district.php">
   <?php include('error.php'); ?>

  	<div class="input-group">
  		<label>District Name</label>
  		<input type="text" name="dist_name" >
  	</div>
  	<div class="input-group">
  		<label>District Code</label>
  		<input type="text" name="dist_code">
  	</div>
	<div class="input-group">
  		<label>Popuation</label>
  		<input type="text" name="pop" >
  	</div>
	<div class="input-group">
  		<label>Number of schools</label>
  		<input type="text" name="nos" >
  	</div>
	<div class="input-group">
  		<label>Number of colleges</label>
  		<input type="text" name="noc" >
  	</div>
	<div class="input-group">
  		<label>Male literacy</label>
  		<input type="text" name="malelit" >
  	</div>
	<div class="input-group">
  		<label>Female literacy</label>
  		<input type="text" name="femalelit" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="district">Submit</button>
  	</div>
  </form>
</body>
</html>