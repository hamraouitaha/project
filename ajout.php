 <?php 

include_once 'connect.php';
session_start() ;
$value=$_SESSION['value'];
$_SESSION['nomb'];
$idb=$_SESSION['idb'];
$idm=$_SESSION['idm'];
$volentaire=$_GET['s1'];




if ($value=="V1"){
    echo"<html> 
       <head>
    <style type=\"text/css\">
       body {
   background-image: url(\"FX_Football_Background_FX_Football.jpg\");
        background-position: center;
    background-size: cover;
}
           </style>
    </head>
    <body>
    </body>
</html>";
   $sql=" INSERT INTO `buvette` (`idB`?`nomB`,`emplacement`,`responsable`)
VALUES ('$idb','$idm','','$volentaire')";
    $res=mysqli_query($idconnecxion,$sql);
}else  {
    echo "<html> 
       <head>
    <style type=\"text/css\">
       body {
   background-image: url(\"FX_Football_Background_FX_Football.jpg\");
        background-position: center;
    background-size: cover;
}
           </style>
    </head>
    <body>
    </body>
</html>";
    $hdeb=$_GET['hdeb'];
$hfin=$_GET['hfin'];
    $sql=" INSERT INTO `est_present` (`idV`,`idB`,`ìdM`,`hdeb`,`hfin`)
VALUES ('$volentaire','$idb','$idm','$hdeb','$hfin')";
    $res=mysqli_query($idconnecxion,$sql);
    
}




?>
