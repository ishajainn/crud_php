<?php
include 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">S NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead> 
  <tbody>
  <?php
   $sql="select * from `tablename`";
   $result=mysqli_query($con,$sql);
   if($result){
    while($row=mysqli_ftech_assoc($result)){
        $id=$row['ID'];
        $name=$row['Name'];
        $email=$row['Email'];
        $mobile=$row['Mobile'];
        $password=$row['Password'];
        echo '
            <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
        <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
    </td> 
        </tr>
        
        '

    }

   } 
  ?>
    
  </tbody>
</table>
    </div>
</body>
</html>