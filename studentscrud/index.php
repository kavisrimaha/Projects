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
                   <button class="btn btn-info"><a href="add.php" class="text-light">Add New</a></button>
                   <br><br>
                   <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                                $connection=mysqli_connect("localhost","root","");
                                $db=mysqli_select_db($connection,"dbcrud") ;

                                $sql="Select*from student";
                                $run=mysqli_query($connection,$sql);

                                $id=1;
                                
                                while($row= mysqli_fetch_array($run))
                                {
                                    $uid=$row['id'];
                                    $Name=$row['Name'];
                                    $Department=$row['Department'];
                                    $Mobile=$row['Mobile'];

                                 ?>
                                    <tr>
                                        <td><?php echo $uid  ?></td>
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Department ?></td>
                                        <td><?php echo $Mobile  ?></td>
                                          
                                        <td>
                                        <button class="btn btn-success"><a href='edit.php?edit=<?php echo $uid ?>' class="text-light" >Edit</a></button>  
                                        <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light" >Delete</a></button> 
                                            
                                        </td>
                                    </tr>


                                    <?php $uid++;
                                } ?>
                           
                        </tbody>
                        </table>
                </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>