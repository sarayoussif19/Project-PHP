<?php
include 'conect.php';
if(isset($_GET['deleteproduct'])){
    $product=$_GET['deleteproduct'];

    $sql="delete from `product` where product=$product";
    $result=mysqli_query($con,$sql);
if($result){
    // echo "data delete successfuly";
    header('location:dissplay.php');
}else{ die(mysqli_error($con));}
}
?>