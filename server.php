<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
include_once'connect.php';


if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($idconnecxion, $_POST['username']);
  $password_1 = mysqli_real_escape_string($idconnecxion, $_POST['password']);
  $password_2 = mysqli_real_escape_string($idconnecxion, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `loginnew` WHERE username='$username'";
  $result = mysqli_query($idconnecxion, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] == $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5(password);//encrypt the password before saving in the database

  	$query = "INSERT INTO `loginnew` ( `username`, `password`, `confgpassword`) VALUES 
                                      ( '$username', '$password', '$confgpassword')";
  	mysqli_query($idconnecxion, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($idconnecxion, $_POST['username']);
  $password = mysqli_real_escape_string($idconnecxion, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM `loginnew`  WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($idconnecxion, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
        header('location:login.php');
  	}
  }
}

?>