<?php
require_once'../db_action/db_connection.php';

if(isset($_POST["Submit"]))
{
$station_name=$_POST['station_name'];
$owner_name=$_POST['owner_name'];
$petrol_92=$_POST['petrol_92'];
$petrol_95=$_POST['petrol_95'];  
$auto_diesel=$_POST['auto_diesel'];   
$super_diesel=$_POST['super_diesel']; 


$sql="INSERT INTO station_tbl(station_name,owner_name,petrol_92,petrol_95,auto_diesel,super_diesel) VALUES ('$station_name','$owner_name','$petrol_92','$petrol_95','$auto_diesel','$super_diesel')";



if($conn->query($sql)===TRUE)
{
    echo "<p>New Records Successfully Added<p>";
} 
else
{
    echo"Error".$sql.''.$conn->Connect_Error;  
}

$conn->close();
}

//echo "<a href='../front/create_user.php'><button type='button'>Home</button></a>";
echo "<a href='../front/table.php'><button type='button'>View</button></a>";

?>

