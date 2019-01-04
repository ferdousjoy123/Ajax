<?php
require_once('db_connection.php');
$nameid=$_POST['datapost'];
   $q="SELECT * FROM classes WHERE mid='$nameid'";
 $result=mysqli_query($con, $q);
 
 
while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <option> <?=$rows['class'];?> </option>
                                   
                                   <?php
                                }
                                
                                ?>
                                




  


 