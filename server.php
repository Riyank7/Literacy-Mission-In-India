<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'literacy');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index1.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}

  }
}

if (isset($_POST['district'])) {
            $dist_name = mysqli_real_escape_string($db, $_POST['dist_name']);
            $dist_code = mysqli_real_escape_string($db, $_POST['dist_code']);
			 $pop = mysqli_real_escape_string($db, $_POST['pop']);
			  $nos= mysqli_real_escape_string($db, $_POST['nos']);
			   $noc = mysqli_real_escape_string($db, $_POST['noc']);
			    $malelit = mysqli_real_escape_string($db, $_POST['malelit']);
              $femalelit= mysqli_real_escape_string($db, $_POST['femalelit']);
			  
			 
          
            if (empty($dist_name)||empty($dist_code)||empty($pop)||empty($nos)||empty($noc)||empty($malelit)||empty($femalelit)) {
              array_push($errors, "Missing Entries");
            }
          
            $user_check_query = "SELECT * FROM District_F WHERE District_Code='$dist_code' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            
            if ($user) { 
          
              if (($user['dist_code'] === $dist_code)) {
                array_push($errors, "district code already exists");
              }
            }
          
          
            if (count($errors) == 0) {
              $query = "INSERT INTO District_F (District_Code ,District_Name ,Population,No_Schools ,No_Colleges ,Male_Literacy_D ,Female_Literacy_D) 
                  VALUES('$dist_code', '$dist_name',' $pop','$nos','$noc','$malelit','$femalelit')";
            mysqli_query($db, $query);
            header('location: updationsuccess.php');
          
              }
            }
			
if (isset($_POST['state'])) {
            $state_code = mysqli_real_escape_string($db, $_POST['state_code']);
            $state_name = mysqli_real_escape_string($db, $_POST['state_name']);
			 $mls = mysqli_real_escape_string($db, $_POST['mls']);
			  $fls= mysqli_real_escape_string($db, $_POST['fls']);
			  
			  
			 
          
            if (empty($state_code)||empty($state_name)||empty($mls)||empty($fls)) {
              array_push($errors, "Missing Entries");
            }
          
            $user_check_query = "SELECT * FROM State_F WHERE State_Code='$state_code' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            
            if ($user) { 
          
              if (($user['State_code'] === $state_code)) {
                array_push($errors, "State code already exists");
              }
            }
          
          
            if (count($errors) == 0) {
              $query = "INSERT INTO State_F (State_Code ,State_Name ,Male_Literacy_S ,Female_Literacy_S) 
                  VALUES('$state_code', '$state_name',' $mls','$fls')";
            mysqli_query($db, $query);
            header('location: updationsuccess.php');
          
              }
            }
			
if (isset($_POST['funds'])) {
            $dist_code = mysqli_real_escape_string($db, $_POST['dist_code']);
            $gs = mysqli_real_escape_string($db, $_POST['gs']);
			 $gf = mysqli_real_escape_string($db, $_POST['gf']);
			  
			  
			 
          
            if (empty($dist_code)||empty($gs)||empty($gf)) {
              array_push($errors, "Missing Entries");
            }
          
            $user_check_query = "SELECT * FROM Funds_F WHERE District_Code='$dist_code' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            
            if ($user) { 
          
              if (($user['District_code'] === $dist_code)) {
                array_push($errors, "District code already exists");
              }
            }
          
          
            if (count($errors) == 0) {
              $query = "INSERT INTO Funds_F (District_Code,Govt_Sector,Govt_Funds) 
                  VALUES('$dist_code', '$gs',' $gf')";
            mysqli_query($db, $query);
            header('location: updationsuccess.php');
          
              }
            }
			


?>