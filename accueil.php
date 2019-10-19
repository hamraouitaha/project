<?php
include_once 'connect.php';
	$sql="SELECT  M.date,  p1.drapeau, p1.pays ,M.scoreA,M.scoreB, p2.pays,p2.drapeau,M.idM
FROM `match` M , `equipe` p1, `equipe`  p2
WHERE M.eqA=p1.idE AND M.eqB=p2.idE ";	
	echo '
    <html>
	<head>
        <title>accueil</title>
<style type="text/css"> 
body {
    background-image: url("299574.jpg");
    background-position: center;
    background-size: cover;

}
table {
  margin: auto ;  
  text-align: center;
  border: 1px solid ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  color:black;
  padding: 20px;
  border-collapse: collapse;
    
}
img {
    width: 60%;
    height: 35%;
     border-radius: 8px;
}
td{
    text-align: center;
    font-style: italic;
    font-size: 14px;
    font-weight: bold;
     border: 1px solid black;  
    border-collapse: collapse;
}
tr{
    text-align: center;
    font-style: italic;
    font-size: 14px;
    font-weight: bold;
    border: 1px solid black;  
    border-collapse: collapse;
}
th{
    text-align: center;
    font-style: italic;
    font-size: 24px;
    font-weight: bold;
    border: 1px solid black;  
    border-collapse: collapse;
}
p {
    text-align: center;
    font-style: italic;
    font-size: 20px;
    font-weight: bold;
    color:hsl(0,100%,30%);
}
#ep1 {
	text-align : center ;
    font-style: italic;
    font-size: 14px;
    font-weight: bold;
    color:black;
    
}
#ep2 {
	text-align: center ;
    font-style: italic;
    font-size: 14px;
    font-weight: bold;
    color:black;
    }
a {
 color:hsl(0,100%,30%);
}
    

</style>
	</head>
	<body>
    
	<table>
	<th colspan="8">
		Liste de match</td>
	</th>
	<tr>
		<td >date match</td>
		<td>drapeaux du pays</td>
		<td >Nom des équipe A</td>
		<td >résultat</td>
		<td>Nom des équipe B</td>
		<td>drapeaux du pays</td>
		<td>les buvettes</td>
		<td>les volentaires</td>
	</tr>';
 		$m=mysqli_query($idconnecxion,$sql);
		while($t=mysqli_fetch_row($m)){
		echo"<tr>
                   <td><p>$t[0]</p></td>
                   <td><img src=\"$t[1]\"></td>
				   <td id=\"ep1\">$t[2]</td>";
				   if (($t[3]==NULL)&&($t[4]==NULL))
				   {
					   echo" <td><a target=\"bas\" href=\"fonctions.php?idm=$t[7]\"> preview </a></td>";
					  
 
				   }
				   else 
				   {
					   
					   echo"<td><a target=\"bas\" href=\"fonctions.php?idm=$t[7]\">".  $t[3]." -". $t[4] ."</a></td>";
                   }
					  echo " <td id=\"ep2\">$t[5]</td>
		             <td><img src=\"$t[6]\"></td>";
                       $ouv=" SELECT COUNT(e.idM) FROM  `est_ouverte` e where  e.idM=$t[7] ";
 $res=mysqli_query($idconnecxion,$ouv);
  while($o=mysqli_fetch_row($res))
 {
   echo  "   <td><p> $o[0]</p></td> ";
  }
       $pre="SELECT COUNT(v.idV)
FROM `est_present` v
WHERE v.idM=$t[7] ";
 $res1=mysqli_query($idconnecxion,$pre);
 while($p=mysqli_fetch_row($res1))
 {
   echo  "<td><p> $p[0] </p></td> ";
 }        
echo "</tr>";
 
				   }			  				  
	
	echo "</table>
    </body>
    </html>";
	//3-et pour mettre fin a la connection 
	@mysqli_close($idconnecxion);
?>