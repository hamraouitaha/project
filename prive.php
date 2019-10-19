<?php
//1_Connexion au serveur et choisir la BD
include_once 'connect.php';

  if(isset($_POST['T1'] )&& isset($_POST['T2']))
  {
$login=$_POST['T1'] ;
$password=$_POST['T2'] ;
$q = "SELECT `username`, `password` FROM `loginnew` where username='$login' and password='$password'";   
	$m = mysqli_query($idconnecxion,$q) or die(mysqli_error());
	if(mysqli_num_rows($m)==0)
		die("Veuillez verifier votre login/mot de passe");
	
	$t = mysqli_fetch_array($m);
	
	//la variable de session ma yelzemech 9balha echo
	session_start();
	//5abina el pseudo fel variable x
	$_SESSION['x'] = $password;
	
	//5abina username fel variable np
	$_SESSION['np'] = $login;
        header('Location:http://localhost/buvettes/choisir.html');
mysqli_close($idconnecxion);

  }
?>