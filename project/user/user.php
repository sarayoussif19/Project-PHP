<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['password'];
$Room=$_POST['room'];
$Ext=$_POST['ext'];
$Img=$_POST['roomm'];

$sql="insert into `crud` (`name`,`Room`,`Ext.`,`Img`)values('$name','$Room','$Ext','$Img')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data inserted successfuly";
}else{ die(mysqli_error($con));}
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>crud operation</title>
  </head>
  <body>
    
    
<div class="container my-5">

<form method="post">
<div class="form-group">
    <label>name</label>
    <input type="text" class="form-control"  name="name" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  name="email" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  name="password" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>confirm password</label>
    <input type="text" class="form-control"  name="password" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>room</label>
    <input type="text" class="form-control"  name="room" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>Ext</label>
    <input type="text" class="form-control"  name="ext" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>img</label>
    <input type="img" class="form-control"  name="roomm" autocomplete="off"> 
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>

  </body>
</html>