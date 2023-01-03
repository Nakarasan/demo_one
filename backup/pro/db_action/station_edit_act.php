<!DOCTYPE html>
<html>
    <head><title>Edit User</title> </head>
<body></body>
</html>

<?php
require_once'../db_action/db_connection.php';

if($_POST)
{
$station_name=$_POST['station_name'];
$owner_name=$_POST['owner_name'];
$petrol_92=$_POST['petrol_92'];
$petrol_95=$_POST['petrol_95'];  
$auto_diesel=$_POST['auto_diesel']; 
$super_diesel=$_POST['super_diesel']; 

$id=$_POST['id'];

$sql="UPDATE station_tbl SET station_name='$station_name',owner_name='$owner_name',petrol_92='$petrol_92',petrol_95='$petrol_95',auto_diesel='$auto_diesel',super_diesel='$super_diesel' WHERE id={$id}";
 


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