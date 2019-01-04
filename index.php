<?php
require_once('db_connection.php');



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .sec{
         background: rgb(120,238,93);
background: linear-gradient(59deg, rgba(120,238,93,0.6110644086736257) 20%, rgba(120,238,93,1) 95%);  padding: 15%;
            
    }
        form{
            padding:10% 5%;
            border: 2px solid #fff;
        }
</style>

</head>

<body>
    <section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="form-group">
                            <label for=""> <h6>Your Degree</h6></label>
                            <select class="form-control" onchange="myfun(this.value)">
                              <option>Select anyone</option>
                               
                                <?php
                                $q="SELECT * FROM degree";
                                $result=mysqli_query($con, $q);
                                while($rows=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?=$rows['mid'];?>"> <?=$rows['degrees'];?> </option>
                                    <?php
                                }
                                
                                ?>
                            </select><br>
                              
                            <select class="form-control" id="dataget">
                                 <option>Choose anyone</option> 
                            </select><br> 
                              <button type="submit" class="btn btn-primary">Submit</button>   
                        </div>
 
                    </form>

                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
    function myfun(datavalue){
        $.ajax({
            url:'class.php',
            type:'POST',
            data:{datapost : datavalue},
            success:function(result){
                $('#dataget').html(result);
            }
            
        });
        
        
        
    }
    
    
    </script>


</body>

</html>
