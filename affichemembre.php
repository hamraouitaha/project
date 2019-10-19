<?php
    $serveurBD="localhost";
 $nomutilisateur="root";
 $modepasse="";
 $basededonne="buvettes";
 $idconnecxion=mysqli_connect($serveurBD,$nomutilisateur,$modepasse)
 or die("impossible de se coonect au serveur de base de donnée");
  mysqli_select_db($idconnecxion,$basededonne)or die ("cette base donne n'existe pas");

    $sql="SELECT DISTINCT v.nomV , v.age  
FROM `volontaire` v,`buvette` b ,`est_present` e  ";
    $Responsable=$_POST['R1'] ;
    if($Responsable=="oui"){
        $sql=$sql."WHERE b.responsable=v.idV ";
        if((isset($_POST['T1']))&&($_POST['T1']!="")){
    $age_min=$_POST['T1'] ;
             $sql=$sql."AND v.age>=\"$age_min\" ";
}
if((isset($_POST['T2']))&&($_POST['T2']!="")){
    $age_max=$_POST['T2'] ;
    $sql=$sql."AND v.age<=\"$age_max\" ";
}
if((isset($_POST['T3']))&&($_POST['T3']!="")){
    $nom=$_POST['T3'] ;
    $sql=$sql."AND v.idV=\"$nom\" ";
} 
if((isset($_POST['T4']))&&($_POST['T4']!="")){
    $Nombre_minimal=$_POST['T4'] ;
    $sql=$sql."AND total >=\"$Nombre_minimal\" ";
} 
        
        
    } else {
               $sql=$sql."WHERE e.idV=v.idV ";
        if((isset($_POST['T1']))&&($_POST['T1']!="")){
    $age_min=$_POST['T1'] ;
             $sql=$sql."AND v.age>=\"$age_min\" ";
}
if((isset($_POST['T2']))&&($_POST['T2']!="")){
    $age_max=$_POST['T2'] ;
    $sql=$sql."AND v.age<=\"$age_max\" ";
}
if((isset($_POST['T3']))&&($_POST['T3']!="")){
    $nom=$_POST['T3'] ;
    $sql=$sql."AND v.idV=\"$nom\" ";
} 
if((isset($_POST['T4']))&&($_POST['T4']!="")){
    $Nombre_minimal=$_POST['T4'] ;
    $sql=$sql."AND count(e.idV)  >=\"$Nombre_minimal\" ";
} 
      
        
    }
    
    echo "<html>
          <head>
          <style type=\"text/css\"> 
body {
    background-image: url(\"754479_football-or-soccer-balls-hd-wallpapers-4k-wallpapers_1920x1080_h.jpg\");
    background-position: center;
    background-size: cover;
}
table {
 width: 30%;
  margin: 0px 100px 0px;  
  text-align: center;
  border: 1px solid ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}



    p {
    font-style: italic;
    font-size: 22px;
    font-weight: bold;
    color:black;
    
}
td {
text-align:left ;
font-size: 19px;
    color:black;
}

</style></head>
          <body>
          <table>";
				
	echo "<tr> 
    <td><p>nom:</p></td>
    <td><p>age:</p></td>
    </tr>";
 $res=mysqli_query($idconnecxion,$sql); 
 while ($t=mysqli_fetch_row($res))	
{
     

	echo 	"<tr>";
				
	echo "<td>".$t[0]."</td>";
				
	echo "<td>".$t[1].'</td>';
				
	echo 	"</tr>";
}
	echo"</table>
          </body>
          </html>";

mysqli_close($idconnecxion);
?>
    