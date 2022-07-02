 <?php // include 'navbar.html';?> 
<?php 
$db='mysql:host=localhost;dbname=php_project';
$conn= new PDO($db,'root','');
var_dump($conn);
?>
<!-- <h3>Orders</h3>
<table class="table table-border">
    <tr>
        <th>order date</th>
        <th>name</th>
        <th>room</th>
        <th>ext</th>
        <th>action</th>
    </tr>
    
</table> -->