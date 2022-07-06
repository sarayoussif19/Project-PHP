<?php
include 'connect.php';
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
    <button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add user</a> </button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Room</th>
      <th scope="col">Ext.</th>
      <th scope="col">Img</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="SELECT * FROM `crud`";
  $result=mysqli_query($con,$sql);
if($result){
    while( $row=mysqli_fetch_assoc($result))
   {
    $Name=$row['Name'];
    $Room=$row['Room'];
    $Ext.=$row['Ext.'];
    $Img=$row['Img'];
    $Action=$row['Action'];
    echo '<tr>
    <th scope="row">'.$Name.'</th>
    <td>'.$Room.'</td>
    <td>'.$Ext.'</td>
    <td>'.$Img.'</td>
    <td>'.$Action.'</td>
    <td>
    <button class="btn btn-primary my-5"><a href="" class="text-light">update</a></button>
    <button class="btn btn-danger my-5"><a href="" class="text-light">delete</a></button>
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