<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="d-flex justify-content-between align-items-center">
        Students Data
        <a href="<?= base_url('add') ?>" class="btn btn-success ms-auto">Add New</a>
        </h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">mobile</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <!-- <?php
            if(!empty($alldbvalues)){
                echo"not empty";
            }

        ?> -->
        <?php  $id=1; ?>
        <?php foreach($alldbvalues as $alldbvalue) :?>

           <tbody>
           <tr>
           <td><?php echo $id++ ?></td>
           <td><?php echo  $alldbvalue['name'] ?></td>
           <td><?php echo  $alldbvalue['mobile'] ?></td>
           <td><?php echo  $alldbvalue['email'] ?></td>
           <td><a href="<?= base_url('edit/'.$alldbvalue['id']) ?>" class="btn btn-success mr-2">EDIT</a></td>

           <td><a href="<?= base_url('delete/'. $alldbvalue['id']) ?>" class="btn btn-danger">DELETE</a></td>

           </tr>
       
       </tbody>
        
        
       <?php endforeach; ?>
       
    </table> 
    </div>
</body>
</html>