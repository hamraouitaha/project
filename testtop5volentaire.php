 <?php
include_once 'connect.php';
        $sql="SELECT v.nomV,v.age,COUNT(E.idV)
FROM `volontaire` v, `est_present` E
WHERE v.idV=E.idV
GROUP BY v.nomV , v.age
ORDER BY 3 DESC";
     echo "<html>
    <head>
    <style type=\"text/css\"> 
body {
    background-image: url(\"play-field.jpg\");
    background-position: center;
    background-size: cover;
}
table {
 
  margin: auto ; 
  border: 0px ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}
td {
    font-style: italic;
    font-size: 20px;
    font-weight: bold;
    color:black;
  }
  th {
   font-style: italic;
    font-size: 40px;
    font-weight: bold;
    color:black;
  }
</style>
</head>
<body>
     <table>
     <th colspan=\"2\">top 5 volontaires </th>";
     	$tv=mysqli_query($idconnecxion,$sql);
     $i=0;
           while(($t=mysqli_fetch_row($tv))&&($i<5)){
               
              echo "<tr>
              <td> $t[0] </td>
              <td> $t[1] </td>
               </tr>" ; 
               $i++;
           }
     echo "</table>
     </body>
     </html>";
?>