<?php
   $connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,"dbcrud") ;
   if (isset($_GET['edit'])) {
    $edit=$_GET['edit'];

    $sql="select * from student where id=$edit";
 
    $run=mysqli_query($connection , $sql);
 //    print_r(mysqli_fetch_array($run));exit;
    while($row=mysqli_fetch_array($run))
     {
                                   
         $id=$row['id'];
         $Name=$row['Name'];
         $Department=$row['Department'];
         $Mobile=$row['Mobile'];
     } 
   }                             
                                    

?>
<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"dbcrud") ;

        if(isset($_POST['submit']))
            {
                $id=$_POST['id'];
                $Name= $_POST['name'];
                $Department= $_POST['department'];
                $Mobile= $_POST['mobile'];

                 $sql="Update student set Name='$Name', Department='$Department',Mobile='$Mobile' where id='$id'";
                // print_r($sql);exit;
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
                <form action="edit.php" method="post" id=validaton>
                 <input type="hidden" name="id" id="id" value="<?php echo $id ?>">  
                    <div class="form-group" id=validation>
                        <label >Name</label>
                        <input type="text" name="name"  pattern="[a-zA-Z][a-zA-Z ]{2,}"  class="form-control" placeholder="Enter Name"  value="<?php echo $Name ?>" required>
                    </div>
                    <div class="form-group">
                        <label >Department</label>
                        <input type="text" name="department"  class="form-control" placeholder="Enter Department" value="<?php echo $Department ?>" required >
                    </div>
                    <div class="form-group">
                        <label >Mobile</label>
                        <input type="text" name="mobile" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter Mobile "value="<?php echo $Mobile ?>" required>
                    </div>
                    
                    <input type="submit" id class="btn btn-primary" name="submit" value="Update">
                    </form>
                </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
