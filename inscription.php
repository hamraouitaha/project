<?php

//1_Connexion au serveur et choisir la BD
include_once'connect.php';
// if(isset($_POST['T1'] )&& isset($_POST['T2']) && isset($_POST['T3']))
	//if (isset($_request['B1']))
 // {
	  echo"bonjour";
      $login=$_POST['T1'] ;
        $password=$_POST['T2'] ;
            $confgpassword=$_POST['T3'] ;
             //$q="SELECT `username`, `password`, `confgpassword` FROM `loginnew` WHERE username='$login' and password=$password and                                             confgpassword=$confgpassword";
                  // echo"$q";
	                  // $m = mysqli_query($q) or die(mysqli_error());
	                        // if(mysqli_num_rows($m)==0)die("Veuillez vérifier votre login/mot de passe");
            //INSERT INTO loginnew (id,username,password,confgpassword) VALUES ('10','".$_POST['T1']."','".$_POST['T2']."','".$_POST['T3']."')
       // echo "Insertion dans la base avec succes";
	                                            // else
		                                           //  echo "Problème d'insertion dans la base ";
                  $q2="INSERT INTO `loginnew` (`id`, `username`, `password`, `confgpassword`) VALUES (NULL, '$login', '$password', '$confgpassword')"; 
                       if(mysqli_query($idconnecxion,$q2)	
                          {
         	                header('Location:http://localhost/buvettes/choisir.html')
                          }
                                else
                                   {  
                                         echo "Problème d'insertion dans la base ";  
                                   }
            
	               mysqli_close($idconnecxion);
 // }
?>
