<?php
require_once'../db_action/db_connection.php';

if(isset($_POST["Submit"]))
{
$full_name=$_POST['full_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];  
$mobile_no=$_POST['mobile_no'];   


$sql="INSERT INTO user_tbl(full_name,user_name,password,email,mobile_no) VALUES ('$full_name','$user_name','$password','$email','$mobile_no')";



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

<script type="text/javascript">location.href = '../front/table.php';</script>