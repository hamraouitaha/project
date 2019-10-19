<html>
    <head>
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
	
		<table>
		
			<tr>
				<td>Nom equipe A:</td>
				<td><input type="text" name="T1" ></td>
			</tr>
			<tr>
				<td>Nom equipe B:</td>
				<td><input type="text" name="T2"></td>
			</tr>
			<tr>
			<td></td>
	<td><input type="submit" value="Ajouter Match" name="B1" ></td>
				
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
  $eqA = $_POST['T1'];
  $eqB= $_POST['T2'];
	$q = "SELECT * FROM `match` WHERE  eqA='$eqA' AND eqB='$eqB'";
	$r = mysqli_query($idconnecxion,$q);
	if(mysqli_num_rows($r) != 0)
		die(" buvette existant ");
	
	$q2 = "INSERT INTO `match` (`idM`, `date`, `eqA`, `eqB`, `scoreA`, `scoreB`) VALUES ('', '', '$eqA', '$eqB', 'NULL', 'NULL')"; 
	$r2 = mysqli_query($idconnecxion,$q2);
	if($r2)
		echo "Insertion dans la base avec succès";
	else
		echo "Problème d'insertion dans la base ";


	mysqli_close($idconnecxion);
}
?>