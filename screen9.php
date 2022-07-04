<?php include 'navbar.html';
$db='mysql:host=localhost;dbname=php_project';
$conn= new PDO($db,'root','');
// 
$query="SELECT * FROM user  ";
$sql=$conn->prepare($query);
$sql->execute();
// $sql->fetchAll();
echo '<h3>orders</h3>';

 
echo '
<form action="screen10.php" method="post"> 
    <label for="datefrom">date from</label>
    <input type="time" name="datefrom" id="datefrom" name="datefrom">
    <label for="dateto">date from</label>
    <input type="time" placeholder="date from" id="dateto" name="dateto">
    <select name="username" id="username">';
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
       echo '<option value='.$row['user_id'].'>'. $row['name'].'</option>' ;

};
  echo '  </select><br><br>
  <button type="submit" class="btn btn-success text-center">show details</button>
</form>';
echo ' <table class="table table-border shadow container">
<tr>
        <th>Name</th>
        <th>tatal amount</th>

    </tr>
 
   ';
   $query2="SELECT user.name ,orders.amount FROM `user` JOIN `orders` ON user.user_id = orders.user_id ";
$sql2=$conn->prepare($query2);
$sql2->execute();
while($rows = $sql2->fetch(PDO::FETCH_ASSOC)){

    echo'<tr>';
    echo'<td>'. $rows['name'].'</td>';
    echo'<td>'. $rows['amount'].'</td>';
//    echo'<td>'.$row['user.name'].'</td>';
    
    echo'</tr>';
   }
   echo'</table><br><br>';
//////////
   echo ' <table class="table table-border shadow container">
<tr>
        <th>Order date</th>
        <th> amount</th>

    </tr>
 
   ';
   $query2="SELECT * FROM `orders`  ";
$sql2=$conn->prepare($query2);
$sql2->execute();
while($rows = $sql2->fetch(PDO::FETCH_ASSOC)){

    echo'<tr>';
    echo'<td>'. $rows['order_date'].'</td>';
    echo'<td>'. $rows['amount'].'</td>';
//    echo'<td>'.$row['user.name'].'</td>';
    
    echo'</tr>';
   }
   echo'</table>';

   //WHERE orders.user_id =1 
?>


