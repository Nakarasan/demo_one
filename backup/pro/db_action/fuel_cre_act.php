<?php
require_once'../db_action/db_connection.php';

if(isset($_POST["Submit"]))
{
$fuel_type=$_POST['fuel_type'];
$price=$_POST['price'];
$last_update=$_POST['last_update'];



$sql="INSERT INTO fuel_tbl(fuel_type,price,last_update) VALUES ('$fuel_type','$price','$last_update')";



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

