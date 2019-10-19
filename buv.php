
<?php 
echo "<html>
<head>
<title></title>
<style type=\"text/css\"> 
body {
   background-image: url(\"FX_Football_Background_FX_Football.jpg\");
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
<table>";
    include_once'connect.php';
    $idm=$_GET["idm"];
    	$sq= "SELECT   p1.pays , p2.pays,M.idM
				FROM `match` M , `equipe` p1, `equipe`  p2
				WHERE M.eqA=p1.idE AND M.eqB=p2.idE 
      AND m.idM=\"$idm\" ";

$r=mysqli_query($idconnecxion,$sq);
        while($d=mysqli_fetch_array($r)) {
   echo "<tr>";
       echo "<td colspan=\"2\">".$d[0]."-".$d[1]."</td>";
            echo "</tr>";
                                } 


        $sql = "SELECT b.nomB , b.idB
        FROM `buvette` b ,`est_ouverte` e
        WHERE e.idB=b.idB 
        AND e.idM=\"$idm\" ";
echo "<tr> 
      <td> buvette : </td>";
            $res = mysqli_query($idconnecxion,$sql);
        while($data=mysqli_fetch_array($res)) {
   
       echo "<td><a target=\"bas\" href=\"aff.php?nomB=$data[0]&idm=$idm&idB=$data[1] \" >".$data[0]." </a></td>";
            echo "</tr><tr> <td></td>";
                                } 
echo " 
</tr>
</table>
      </body>
      </html>";
?>
	