 <?php
include_once 'connect.php';
           $sql="SELECT b.nomB , b.emplacement , COUNT(E.idB)
FROM `buvette` b , `est_ouverte` E 
WHERE b.idB=E.idB
GROUP BY 1,2 
ORDER BY 3 DESC ";
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
     <th colspan=\"2\">top 5 buvettes </th>";
     	$tb=mysqli_query($idconnecxion,$sql);
    $i=0;
           while(($t=mysqli_fetch_row($tb))&& ($i<5)){
             
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