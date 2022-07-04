<?php  include 'navbar.html'?> 
<?php 
//connection DB
$db='mysql:host=localhost;dbname=php_project';
$conn= new PDO($db,'root','');
$Dfrom = $_REQUEST['datefrom'];
$Dto = $_REQUEST['dateto'];
$id = $_REQUEST['username'];
 
// $sql->fetchAll();
echo '<h3>orders</h3>';
$query3="SELECT orders.order_date , user.name , user.room_no , user.ext , orders.status FROM `user` JOIN `orders` ON  user.user_id =$id /* && oreders.date_from=$Dfrom && orders.date_to=$Dto*/ ";
$sql2=$conn->prepare($query3);
$sql2->execute();
while($row = $sql2->fetch(PDO::FETCH_ASSOC)){

echo ' <table class="table shadow table-border">
<tr>
        <th>order date</th>
        <th>name</th>
        <th>room</th>
        <th>ext</th>
        <th>action</th>
    </tr>';

    echo'<tr>';
    echo'<td>'.$row['order_date'].'</td>';
    echo'<td>'.$row['name'].'</td>';
    echo'<td>'.$row['room_no'].'</td>';
    echo'<td>'.$row['ext'].'</td>';
    echo'<td>'.$row['status'].'</td>';
    echo'</tr>';
    echo "<tr><img src='./images/Dwarf_mongoose_Korkeasaari_zoo.jpg' width='100px' ></tr>";
   
   echo'</table>';
}
  // JOIN orders ON product.product_id =orders.product_id WHERE orders.user_id =1 
?>

