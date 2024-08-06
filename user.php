<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $password=$_POST['password'];
    $sql="insert into `tablename` (name,email,mobile,password) values("$name","$email","$mobile","$pass")";
    $result=msqli_query($con,$sql);
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
          <input type="text" class="form-control" placeholder="enter your name" name ="name">
          
        </div>
        <div class="mb-3">
            <label >email</label>
            <input type="email" class="form-control" placeholder="enter your email" name ="email">
            
        </div>
          <div class="mb-3">
            <label >Phone number</label>
            <input type="text" class="form-control" placeholder="enter your mobile number" name ="phone">
            
          </div>
          <div class="mb-3">
            <label >password</label>
            <input type="text" class="form-control" placeholder="enter password" name ="password">
            
          </div>
        <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
      </form>
  </body>
</html>