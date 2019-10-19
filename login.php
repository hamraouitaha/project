<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
           <style type="text/css">
 
body {
   background-image: url("maxresdefault.jpg");
        background-position: center;
    background-size: cover;

}
        table {
 width: 30%;
  margin: 100px 100px 0px;  
  text-align: center;
  border: 1px solid ;
  border-bottom: none;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
    
}


    a {
    text-align: center;
    font-style: italic;
    font-size: 18px;
    font-weight: bold;
    color:black;
    
}

               td {
    text-align: center;
    font-style: italic;
    font-size: 18px;
    font-weight: bold;
    color:black;
    
}
    </style>
</head>
<body>
    <form method="post" action="Choisir.html">
  <table >
  	<tr><td><h2>Login</h2></td></tr> 
  
      <?php include('errors.php'); ?>

  		<tr><td>Username</td></tr>
      <tr><td><input type="text" name="username" ></td></tr>
  		<tr><td>Password</td></tr>
      <tr><td><input type="password" name="password"></td></tr>

  		<tr><td><button type="submit" class="btn" name="login">Login</button></td></tr>
  			<tr><td>Not yet a member? <a href="register.php">Sign up</a></td></tr>
  		
  	</table>
  </form>
</body>
</html>