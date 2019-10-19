<html>
    <head> 
        <style type="text/css"> 
body {
    background-image: url("play-field.jpg");
    background-position: center;
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

p {
    text-align: center;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
    color:hsl(0,100%,30%);
    
}
            a {
                
     text-align: center;
    font-style: italic;
    font-size: 20px;
    font-weight: bold;
    color:black;
    
                
            }


</style>
    </head>
<body>
    
<form method="get" action="statmatch.php" name="f">
		<table>
		 <tr> 
              <td>
        <a target="bas" href="testtop5volentaire.php"> top Volontaires </a>
                </td>
             <td colspan="2" ><p>Match</p></td> <td>
        <a target="bas" href="testtop5buvettes.php"> top buvettes </a>
                </td>
            </tr>
        
			<?php 
				include_once 'connect.php';
				$sql = "SELECT   p1.pays , p2.pays,M.idM
				FROM `match` M , `equipe` p1, `equipe`  p2
				WHERE M.eqA=p1.idE AND M.eqB=p2.idE";
				$res = mysqli_query($idconnecxion,$sql);
				while($data=mysqli_fetch_row($res)) {
                   
					echo "<tr><td></td><td colspan=\"2\" ><a target=\"bas\" href=\"statmatch.php?idm=$data[2]\">".$data[0]."-".$data[1]."</a></td></tr>";
				} 
			?>

            <tr>
	
   
 </tr>
    </table>
     </form>
    </body>
    </html>

     