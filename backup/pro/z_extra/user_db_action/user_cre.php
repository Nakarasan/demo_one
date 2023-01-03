<?php
require_once'../db_action/db_connection.php';

if(isset($_POST["Submit"]))
{
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];  
$mobile_no=$_POST['mobile_no'];   


$sql="INSERT INTO user_management(user_name,password,email,mobile_no) VALUES ('$user_name','$password','$email','$mobile_no')";



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


echo "<a href='../user/create_new_user.php'><button type='button'>Home</button></a>";
echo "<a href='../user/view_user.php'><button type='button'>View</button></a>";

?>