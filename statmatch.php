  
  <?php 
  include_once 'connect.php';
$idm=$_GET["idm"];
    echo "  <html>
	<head>
        <title>accueil</title>
<style type=\"text/css\"> 
body {
    background-image: url(\"play-field.jpg\");
    background-size: cover;
}
table {
 
  margin: auto ;  
  text-align: center;
  border: 0px ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}
td {

    text-align: center;
    font-style: italic;
    font-size: 20px;
    font-weight: bold;
    color:black;
  }  
   th {
   font-style: italic;
    font-size: 40px;
    font-weight: bold;
    color:yellow;
  }
#td1 {
  font-style: italic;
    font-size: 25px;
    font-weight: bold;
    color:yellow;
}

</style>
	</head>
	<body>";
$sql="SELECT b.nomB,b.emplacement,v.nomV,b.idB
FROM `buvette` b ,`volontaire` v,`est_ouverte` e
WHERE b.idB=e.idB
AND b.responsable=v.idV
AND e.idM=\"$idm\"";
    $buv=mysqli_query($idconnecxion,$sql);  
    while($tb=mysqli_fetch_row($buv)){
        echo " 
        <table>
        <th> buvette </th>
        <tr>
        <td id=\"td1\">nom </td>
        <td id=\"td1\">emplacement </td>
        <td id=\"td1\">responsable</td>
        </tr>
        <tr>
        <td> $tb[0] </td>
        <td> $tb[1] </td>
        <td> $tb[2] </td>
        </tr>" ;
         $sql2="SELECT v.nomV,v.age ,p.hdeb,p.hfin
FROM `volontaire` v , `est_present` p 
WHERE p.idM=\"$idm\"
AND p.idB=\"$tb[3]\"
AND p.idV=v.idV";
        echo "
         <th> volentaire </th>
            <tr>
            <td id=\"td1\">nom</td>
            <td id=\"td1\">age</td>
            <td id=\"td1\">hdeb</td>
            <td id=\"td1\">hfin</td>
            </tr>";
        $vol=mysqli_query($idconnecxion,$sql2);
        while($tv=mysqli_fetch_row($vol)){
            echo "
            <tr>
            <td> $tv[0] </td> 
            <td> $tv[1] </td> 
            <td> $tv[2] </td> 
            <td> $tv[3] </td> 


            </tr>";
        }
        echo "</table> ";
    }
    echo "</body>
    </html>";  
    


?>