<html>

<head>
<title>Recherche des membres</title>
    <style type="text/css"> 
body {
    background-image: url("754479_football-or-soccer-balls-hd-wallpapers-4k-wallpapers_1920x1080_h.jpg");
    background-position: center;
    background-size: cover;
}
table {
 width: 30%;
  margin: 80px 100px 0px;  
  text-align: center;
  border: 1px solid ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}


    p {
    text-align: center;
    font-style: italic;
    font-size: 18px;
    font-weight: bold;
    color:black;
    
}
</style>
</head>

<body>

<form method="POST" action="affichemembre.php">
		<table>
		<tr>
			<td>
                <p >Age Minimal</p></td>
			<td>
			<input type="text" name="T1" size="20"></td>
			<td>
                <p>Age Maximum</p></td>
			<td>
			<input type="text" name="T2" size="20"></td>
		</tr>
		<tr>
			<td colspan="2">
                <p>Nom</p></td>
			<td colspan="2">
			<input name="T3" size="20" style="float: left"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<p align="right">Nombre minimal</td>
			<td colspan="2">
			<p align="center"><input name="T4" size="20" style="float: left"></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><p align="right">Responsable</td>
            <td ><p><input type="radio" value="oui" name="R1"> oui</p> </td>
			<td ><p><input type="radio" value="non" name="R1" checked="checked">non</p> </td>
		</tr>
		<tr>
			<td colspan="4"><input type="submit" value="Recherche" name="B1" id="B1"></td>
		</tr>
	</table>
</form>
</body>

</html>