<html>

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Ajout d'un volontaire</title>
        <style type="text/css">
 
body {
   background-image: url("maxresdefault.jpg");
        background-position: center;
    background-size: cover;

}
        table {
 width: 30%;
  margin: 150px 150px 0px;  
  text-align: center;
  border: 1px solid ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}


    a {
    text-align: center;
    font-style: italic;
    font-size: 18px;
    font-weight: bold;
    color:black;
    
}

               td {
    text-align: center;
    font-style: italic;
    font-size: 18px;
    font-weight: bold;
    color:black;
    
}
    </style>
</head>

<body>

<form method="POST" action="">

		<table border="0" width="50%">
			<tr>
				<td>Nom</td>
				<td><input type="text" name="T1" ></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="T2" ></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="Ajouter volontaire" name="B1" ></td>
			</tr>
		</table>

</form>

</body>

</html>
<?php

	//1_Connexion au serveur et choisir la BD
include_once 'connect.php';
if(isset($_POST['T1'] )&& isset($_POST['T2']))
{
//2-nejbdou el contenu des champs
  $nom=$_POST['T1'];
    $age=$_POST['T2'];
	$q="SELECT * FROM `volontaire` WHERE nomV='$nom'";
	$r = mysqli_query($idconnecxion,$q);
	if(mysqli_num_rows($r)!=0)
		die(" volontaire existant ");
	
	$q2 = "INSERT INTO `volontaire` ( `nomV`, `age`) VALUES ( '$nom', '$age')"; 
	$r2=mysqli_query($idconnecxion,$q2);
	if($r2)
		echo "Insertion dans la base avec succès";
	else
		echo "Probleme d'insertion dans la base ";


	mysqli_close($idconnecxion);
	}
?>