<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"dbcrud") ;

        if(isset($_POST['submit']))
            {
                $Name= $_POST['name'];
                $Department= $_POST['department'];
                $Mobile= $_POST['mobile'];

                 $sql="Insert into student(Name,Department,Mobile)value('$Name','$Department','$Mobile')";
                


                 if(mysqli_query($connection,$sql))
                 {
                    echo '<script>location.replace("index.php")</script>';
                 }
                 else{
                    echo "something error".$connection->error;
                 }
                
                 




            }







?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Crud </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-header">
                   <h1 >Students Crup Application </h1> 
                </div>
                <div class="card-body">
                <form action="add.php" method="post" id=validation >
                    
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" pattern="[a-zA-Z][a-zA-Z ]{2,}"  class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label >Department</label>
                        <input type="text" name="department"  class="form-control" placeholder="Enter Department" required >
                    </div>
                    <div class="form-group">
                        <label >Mobile</label>
                        <input type="text" name="mobile" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter Mobile" required >
                    </div>
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Register">
                    </form>
                </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>