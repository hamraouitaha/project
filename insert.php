<?php 
include_once 'connect.php';
session_start() ;

$value=$_GET["R1"];
$_SESSION['nomb'];
$idb=$_SESSION['idb'];
$idm=$_SESSION['idm'];
$_SESSION['value']=$value;

 echo "<html> 
       <head>
    <style type=\"text/css\">
       body {
   background-image: url(\"FX_Football_Background_FX_Football.jpg\");
        background-position: center;
    background-size: cover;
}
table {
    width: 30%;
    margin: 80px 0px 0px;
  text-align: center;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
}

        a {
         font-size:20px;
            color:darkgoldenrod;
        }
td {
    
    text-align: center;
     font-size:15px;
    color:darkgoldenrod;
    
}

</style>
       </head>
       <body>
       <form name=\"f\" method=\"get\" action=\"ajout.php\">
       <table>";



if ($value=="V1")
{
    
    $sql="SELECT v.idV,v.nomV
FROM `volontaire` v";
    echo "<tr><td><select name=\"s1\">";
    	$tv=mysqli_query($idconnecxion,$sql);
           while($t=mysqli_fetch_row($tv)){
               
              echo " <option value=\"$t[0]\"> $t[1] </option>" ; 
           
           }
    
    
    
    echo "</select></td></tr>";
    
    echo "<tr><td><input type=\"submit\" value=\"Ajouter\"></td></tr>";
    
    
}else if ($value=="V2"){
    
    $sql="SELECT v.idV,v.nomV
FROM `volontaire` v";
    echo "<tr><td></td><td><select name=\"s1\">";
    	$tv=mysqli_query($idconnecxion,$sql);
           while($t=mysqli_fetch_row($tv)){
               
              echo " <option value=\"$t[0]\"> $t[1] </option>" ; 
           
           }
    
    echo "</select></td></tr>";
    echo "<tr><td>hdeb :</td><td><input type=\"text\" name=\"hdeb\"></td></tr>";
    echo "<tr><td>hfin :</td><td><input type=\"text\" name=\"hfin\"></td></tr>";
    
    echo "<tr><td></td><td><input type=\"submit\" value=\"Ajouter\"></td></tr>";
    
    
}else {
    
       $sql=" INSERT INTO `est_ouverte` (`idB` , `idM`  )
VALUES ('$idb','$idm')";
    $res=mysqli_query($idconnecxion,$sql);
     
}

echo "</table>
</body>
</html>";






?>