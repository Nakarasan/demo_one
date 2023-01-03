<!DOCTYPE html>
<html>
    <head><title>Customer Create</title></head>
<body></body>
</html>


<?php
require_once'db_connection.php';

if(isset($_POST["Submit"]))
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


$sql="INSERT INTO customer_tbl (customer_name,nic_pass,password,mobile_no,address,vehicle_type,chassis_no,fuel_type,vehicle_no,customer_type,eli_week,bal_week,document) VALUES ('$customer_name','$nic_pass','$password','$mobile_no','$address','$vehicle_type','$chassis_no','$fuel_type','$vehicle_no','$customer_type','$eli_week','$bal_week','$document')";

if($conn->query($sql)===TRUE)
{
    $last_id = $conn->insert_id;

   echo "New record created successfully. Last inserted ID is: " . $last_id;
} 
else
{
    echo"Error".$sql.''.$conn->Connect_Error;  
}

$conn->close();
}



echo  "<a href='../front/qr2.php?id=".$last_id."'><button type='button'>QR code</button></a>";
echo "<a href='../front/table.php'><button type='button'>View</button></a>";

?>