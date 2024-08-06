<?php
 include 'connect.php';
 $id=$_GET['updateid'];
 $sql="select * from `table_name` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row["name"];
$email=$row["email"];
$mobile=$row["mobile"];
$password=$row["password"];


 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $password=$_POST['password'];
    $sql="update `tablename` set id='$id',name='$name',email='$email',mobile='$mobile' password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('loctaion:display.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" >

    <title>Crud Operations</title>
    
  </head>
  <body>
    <div class="container my-5"></div>
    <form method="post"> 
        <div class="mb-3">
          <label >name</label>
          <input type="text" class="form-control" placeholder="enter your name" name ="name" value=<?php echo $name;?>>
          
        </div>
        <div class="mb-3">
            <label >email</label>
            <input type="email" class="form-control" placeholder="enter your email" name ="email" value=<?php echo $email;?>>
            
        </div>
          <div class="mb-3">
            <label >Phone number</label>
            <input type="text" class="form-control" placeholder="enter your mobile number" name ="phone" value=<?php echo $mobile;?>>
            
          </div>
          <div class="mb-3">
            <label >password</label>
            <input type="text" class="form-control" placeholder="enter password" name ="password" value=<?php echo $password;?>>
            
          </div>
        <button type="submit" class="btn btn-primary" name ="submit">Update</button>
      </form>
  </body>
</html>