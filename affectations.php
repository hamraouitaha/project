<html>
<head>
<title>Affectations</title>
    <style type="text/css"> 
body {
   background-image: url("FX_Football_Background_FX_Football.jpg");
        background-position: center;
    background-size: cover;
}
table {
    width: 30%;
  margin: 40px 80px 0px;  
  text-align: center;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
}

        a {
            color:darkgoldenrod;
        }
p {
    
    text-align: center;
    
}

</style>
</head>
<body>
<form method="POST" action="buv.php" name="f">
		<table  align="center">
		
			<?php 
				include_once 'connect.php';
				$sql = "SELECT   p1.pays , p2.pays,M.idM
				FROM `match` M , `equipe` p1, `equipe`  p2
				WHERE M.eqA=p1.idE AND M.eqB=p2.idE";
				$res = mysqli_query($idconnecxion,$sql);
				while($data=mysqli_fetch_row($res)) {
					echo "<tr><td><a target=\"bas\" href=\"buv.php?idm=$data[2]\">".$data[0]."-".$data[1]."</a></td></tr>";
				} 
			?>
           
    </table>
            </form>
		

</body>

</html>
