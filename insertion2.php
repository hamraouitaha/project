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

		<table >
		
			<tr>
				<td>Nom</td>
				<td><input type="text" name="T1" ></td>
			</tr>
     <tr>
			<td>emplacement</td>
			<td><select name="D1">
			<option value="Choix Match">emplacement</option>
			<?php 
				include_once 'connect.php';		
             $sql = "SELECT  DISTINCT emplacement FROM `buvette`";
            $res = mysqli_query($idconnecxion,$sql);
             while($data=mysqli_fetch_array($res))  
			      { echo '<option>'.$data["emplacement"].'</option><br/>';}
	         ?>

			</select></td>
		</tr>
			<tr>
			<td>Responsable</td>
			<td><select name="D2">
			<option value="Choix Responsable">Choix Responsable</option>
					<?php 
                    
        $sql = "SELECT DISTINCT nomV FROM `buvette` B ,`volontaire` V WHERE B.responsable=V.idV";
                              $res = mysqli_query($idconnecxion,$sql);
                             while($data=mysqli_fetch_array($res)) {
                          echo '<option>'.$data["nomV"].'</option><br/>';
                              } 
                    ?>
			</select></td>
		</tr>
            <tr>
                <td></td>
              <td><input type="submit" value="Ajouter buvette" name="B1" ></td>  
            
            </tr>
			
		</table>
		
		

</form>

</body>

</html>
<?php
		//1_Connexion au serveur et choisir la BD
include_once 'connect.php';
if(isset($_POST['T1'] )&& isset($_POST['D1'])&& isset($_POST['D2'])){
//2-nejbdou el contenu des champs
  $nom = $_POST['T1'];
  $emplacement=$_POST['D1'];
  $responsable= $_POST['D2'];
	$q = "SELECT * FROM `buvette`b,`volontaire` V WHERE B.responsable=V.idV AND nomB='$nom'";
	$r = mysqli_query($idconnecxion,$q);
	if(mysqli_num_rows($r) != 0)
		die(" buvette existant ");
	
	$q2 = "INSERT INTO `buvette` (`idB`, `nomB`, `emplacement`, `responsable`) VALUES ('', '$nom ', '$emplacement', '$responsable')"; 
	$r2 = mysqli_query($idconnecxion,$q2);
	if($r2)
		echo "Insertion dans la base avec succès";
	else
		echo "Problème d'insertion dans la base ";


	mysqli_close($idconnecxion);
}
?>