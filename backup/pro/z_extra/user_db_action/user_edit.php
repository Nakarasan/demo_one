<!DOCTYPE html>
<html>
    <head><title>Edit User</title> </head>
<body></body>
</html>

<?php
require_once'../db_action/db_connection.php';

if($_POST)
{
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];  
$mobile_no=$_POST['mobile_no']; 

$id=$_POST['id'];

$sql="UPDATE user_management SET user_name='$user_name',password='$password',email='$email',mobile_no='$mobile_no' WHERE id={$id}";
 


if($conn->query($sql)===TRUE)
{
    echo "<p>Records Successfully Updated!<p>";
    echo "<a href='../user/create_new_user.php'><button type='button'>New User</button></a>";
    echo "<a href='../user/view_user.php'><button type='button'>View </button></a>";
} 
else
{
    echo "Error while updating record : ".$sql.''.$conn->connect_error;  
}

$conn->close();
}

//echo "Blank data not inserted";



?>