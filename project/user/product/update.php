<?php
include 'conect.php';
$product=$_GET['updateproduct'];
// $sql="select * from `curd` where product=$product";
// $result=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($result);
// $product=$row['product'];
// $prics=$row['prics'];
// $category=$row['category'];
// $img=$row['img'];

if(isset($_POST['submit'])){
$product=$_POST['product'];
$prics=$_POST['prics'];
$category=$_POST['category'];
$img=$_POST['img'];

$sql="update `product` set product='$product',prics='$prics',category='$category',img='$img' where product=$product";
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
    <label>product</label>
    <input type="text" class="form-control"  name="product" autocomplete="off" value=<?php echo $product;?>> 
  </div>
  <div class="form-group">
    <label>prics</label>
    <input type="text" class="form-control"  name="prics" autocomplete="off" > 
  </div>
  <div class="form-group">
    <label>category</label>
    <input type="text" class="form-control" name="category" autocomplete="off" > 
  </div>
  <div class="form-group">
    <label>img</label>
    <input type="text" class="form-control"  name="img" autocomplete="off" > 
  </div>
  
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
</div>

  </body>
</html>