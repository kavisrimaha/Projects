<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
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
                   <h1 >Update Account</h1> 
                </div>
                <div class="card-body">
                <form action="<?= base_url('update/' . $user['id']) ?>" method="post" id=validation >
                    
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" pattern="[a-zA-Z][a-zA-Z ]{2,}"  class="form-control" placeholder="Enter Name" value="<?php echo $user['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label >Mobile</label>
                        <input type="text" name="mobile" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter Mobile" value="<?php echo $user['mobile'] ?>" required >
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email"  class="form-control" placeholder="Enter Email" required value="<?php echo  $user['email'] ?>">
                    </div>
                   
                    
                    <input  type="submit" class="btn btn-primary" name="submit" value="Update">
                    <a href= "<?= base_url('/') ?>"class="btn btn-danger">Cancel</a>
                    </form>
                </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>