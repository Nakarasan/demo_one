<!DOCTYPE html>
<html>
    <head><title>Edit Customer</title> </head>
<body></body>
</html>

<?php
require_once'db_connection.php';

if($_POST)
{
$customer_name=$_POST['customer_name'];
$nic_pass=$_POST['nic_pass'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];  
$address=$_POST['address']; 
$vehicle_type=$_POST['vehicle_type'];     
$chassis_no=$_POST['chassis_no']; 
$fuel_type=$_POST['fuel_type']; 
$vehicle_no=$_POST['vehicle_no']; 
$customer_type=$_POST['customer_type'];
$eli_week=$_POST['eli_week']; 
$bal_week=$_POST['bal_week'];
$document=$_POST['document'];     


$id=$_POST['id'];

$sql="UPDATE customer_tbl SET customer_name='$customer_name',nic_pass='$nic_pass',password='$password',mobile_no='$mobile_no',address='$address',vehicle_type='$vehicle_type',chassis_no='$chassis_no',fuel_type='$fuel_type',vehicle_no='$vehicle_no',customer_type='$customer_type',eli_week='$eli_week',bal_week='$bal_week',document='$document' WHERE id={$id}";
 


if($conn->query($sql)===TRUE)
{
    echo "<p>Records Successfully Updated!<p>";
    echo "<a href='../front/create_customer.php'><button type='button'>Home</button></a>";
    echo "<a href='../front/table.php'><button type='button'>View</button></a>";
} 
else
{
    echo "Error while updating record : ".$sql.''.$conn->connect_error;  
}

$conn->close();
}

//echo "Blank data not inserted";



?>