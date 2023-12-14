<?php
include('../model/db.php');

$search=$_GET['search'];
$con= connection();
$sql ="SELECT * from registration where name LIKE '%$name%'";
$query = mysqli_query($con, $sql);
//$data='';
while($row= mysqli_fetch_assoc($query)){
    echo  "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    </tr>";
}
//echo $data; 

?>