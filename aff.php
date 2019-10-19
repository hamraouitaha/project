<?php
session_start();
?>
<html>
    <head>
        <style type="text/css"> 
body {
   background-image: url("FX_Football_Background_FX_Football.jpg");
        background-position: center;
    background-size: cover;
}
table {
    width: 30%;
    margin: 50px 0px 0px;
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
     font-size:30px;
    color:darkgoldenrod;
    
}

</style>
   </head>
<body>
<form name="f2" action="insert.php" method="get">
    <table>
    <?php 
       include_once'connect.php';
    $idm=$_GET["idm"];
  $idB=$_GET["idB"];
  $nomB=$_GET["nomB"];
        echo "<br>";
    	$sq= "SELECT   p1.pays , p2.pays
				FROM `match` M , `equipe` p1, `equipe`  p2 
				WHERE M.eqA=p1.idE AND M.eqB=p2.idE 
      AND m.idM=\"$idm\" ";

$r=mysqli_query($idconnecxion,$sq);
        while($d=mysqli_fetch_array($r)) {
   echo "<tr>";
       echo "<td colspan=\"2\">".$d[0]."-".$d[1]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo"<td> BUVETTE :</td>";
            echo"<td>".$nomB."</td>";
            echo "</tr>";
                                }
        $_SESSION['idm']=$idm ;
        $_SESSION['nomb']=$nomB;
        $_SESSION['idb']=$idB;
        
                                 
    ?>

<tr>
			<td colspan="2"><input type="radio" value="V1" name="R1" checked="checked">Affecter Un Responsable</td>
    </tr>
    <tr>
        <td colspan="2"><input type="radio" value="V2" name="R1">Affecter Un Volontaire</td>
    </tr>
    <tr>
			<td colspan="2"><input type="radio" value="V3" name="R1">Buvette Ouverte</td>	
 </tr>
        <tr> <td colspan="2"><input type="submit" value= "Affecter"> </td></tr>
 </table>
</form>
</body>
</html>