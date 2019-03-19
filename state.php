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
	 
  <form method="post" action="state.php">
  <?php include('error.php'); ?>
  	<div class="input-group">
  		<label>State Code</label>
  		<input type="text" name="state_code" >
  	</div>
  	<div class="input-group">
  		<label>State Name</label>
  		<input type="text" name="state_name">
  	</div>
	<div class="input-group">
  		<label>Male Literacy in State</label>
  		<input type="text" name="mls" >
  	</div>
	<div class="input-group">
  		<label>Female Literacy in State</label>
  		<input type="text" name="fls" >
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="state">Submit</button>
  	</div>
  </form>
</body>
</html>