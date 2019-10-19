<html>
<?php
$test = file_get_contents("info.json");
 $json=json_decode($test,true)
 ?>
 <?php
  if( isset($_POST['username']) &&  isset($_POST['id'])){ 
	$test = file_get_contents("infor.json");
    $json = json_decode($test,true);
	$ch=$_POST['username'];
	$id=$_POST['id'];
    $json[0][$id]=$ch;
	$json= json_encode($json);
	file_put_contents('info.json',$json);
	}
		 ?>
    <body>
        <form  action="" method="POST">
            <?php 
               $i=1;
                  while($i<=n)
                  {
                     echo"<h3 class='widget_title'>
             <div class='w3-button w3-xlarge w3-black'>
              <p><input type='button' value='+' name='B1'>
                  <input type='button' value='-' name='B2'></p>
                           </div>
		             </h3>"
             $j=1;
    while($j<=$i)
    {
      if((isset($_POST['B1']="+")))
         
                 echo"<div class='category_header resume_category_header'>
                        <h3 class='category_title' style='background: #373737'>
                        <span class='category_title_icon' style='background-color:#3eb337'><p class='td' id=".$j." data-type='text'>
                                                                                   <?php echo $json[0]['$j'];?></p>
																				   </span></h3>
																				   $j++;
                       </div>
                   <div class='category_body resume_category_body'>
                       <article class='post resume_post resume_post_1 first even'> 
                <div class='post_header resume_post_header'> 
                    <div class='resume_period'>
                        <span class='period_from'>
                            <p class='td' id=".$j." data-type='date' >
                                <?php  echo $json[0]["$j"];?></p>
								$j++;
                        </span> 
                        <span class='period_to period_present'></span><p class='td' id="$j" data-type='text' >
                                   <?php  echo $json[0]["$j"];?></p>
								   $j++;
                    </div>
                         <h4 class='post_title'>
                    <span class='post_title_icon' style='background-color: #3eb337'></span>
                             <p class='td' id=".$j." data-type='text' >
                                   <?php  echo $json[0]["$j"];?></p>
								   $j++;
                                                                        
                    </h4>
                    <h5 class='post_subtitle'><p class='td' id=".$j." data-type='text' >
                                   <?php  echo $json[0]["$j"];?></p></h5>
								   $j++;
                </div>
                <div class='post_body resume_post_body> 
                    <p><p class='td' id=".$j." data-type='text' >
                                   <?php  echo $json[0]["$j"];?></p></p>
								   $j++;
                    <ul>
                        <li><p class='td id=".$j." data-type='text' >
                                   <?php  echo $json[0]["$j"];?></p></li>
								   $j++;
                    </ul>";
             }
				   else
                           
				   {
                           if ($_POST['B2']="-") 
                           break;
                    }
					  
              $i++;
            }    
       ?>                       
    
    
    
    </body>
</html>