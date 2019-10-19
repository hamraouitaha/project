<?php include('server.php') ?>

<html>
<head>
  <title>user Registration system PHP and MySQL</title>
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
   <form method="post" action="register.php">
  <table >
  	<tr><td><h2>register</h2></td></tr> 
  
      <?php include('errors.php'); ?>

  		<tr><td>Username</td></tr>
      <tr><td><input type="text" name="username" value="<?php echo $username ?>" ></td></tr>
  		<tr><td>Password</td></tr>
      <tr><td><input type="password" name="password"></td></tr>
      		<tr><td>confirm_Password</td></tr>
      <tr><td><input type="password" name="password_2"></td></tr>
      <tr><td><button type="submit"  name="register" class="btn">register</button></td></tr>
      <tr><td>already a member? <a href="login.php">Sign in</a></td></tr>
  	
  	
  		
  </table>
        </form>
</body>
</html>