<?php
$con=new mysqli('localhost','root','pass','dbname');
if(!$con){
    die(mysqli_error($con));
}
?>