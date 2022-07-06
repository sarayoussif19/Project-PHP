<?php
include 'conect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>crud operation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5" ><a href="product.php" class="text-light">Add product</a> </button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">product</th>
      <th scope="col">prics</th>
      <th scope="col">category</th>
      <th scope="col">img</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="SELECT * FROM `product`";
  $result=mysqli_query($con,$sql);
if($result){
    while( $row=mysqli_fetch_assoc($result))
   {
    $product=$row['product'];
    $prics=$row['prics'];
    $category=$row['category'];
    $img=$row['img'];
    $action=$row['action'];
    echo '<tr>
    <th scope="row">'.$product.'</th>
    <td>'.$prics.'</td>
    <td>'.$category.'</td>
    <td>'.$img.'</td>
    <td>'.$action.'</td>
    <td>
    <button class="btn btn-primary my-5"><a href="update.php? updateproduct='.$product.'" class="text-light">update</a></button>
    <button class="btn btn-danger my-5"><a href="delete.php? deleteproduct='.$product.'" class="text-light">delete</a></button>
   </td>
  </tr>';
  

   }
}
  
  ?>
   
  </tbody>
</table>
    </div>
</body>
</html>