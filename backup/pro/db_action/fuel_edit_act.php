<!DOCTYPE html>
<html>
    <head><title>Edit User</title> </head>
<body></body>
</html>

<?php
require_once'../db_action/db_connection.php';

if($_POST)
{
$fuel_type=$_POST['fuel_type'];
$price=$_POST['price'];
$last_update=$_POST['last_update'];

$id=$_POST['id'];

$sql="UPDATE fuel_tbl SET fuel_type='$fuel_type',price='$price',last_update='$last_update' WHERE id={$id}";
 


if($conn->query($sql)===TRUE)
{
    echo "<p>Records Successfully Updated!<p>";
    //echo "<a href='../front/create_user.php'><button type='button'>New User</button></a>";
    echo "<a href='../front/table.php'><button type='button'>View </button></a>";
} 
else
{
    echo "Error while updating record : ".$sql.''.$conn->connect_error;  
}

$conn->close();
}

//echo "Blank data not inserted";



?>