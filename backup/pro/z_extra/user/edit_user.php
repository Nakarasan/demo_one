<?php
    require_once'../db_action/db_connection.php';
    
if($_GET['id']) {
    $id = $_GET['id'];
    $sql= "SELECT * FROM user_management WHERE id= {$id}";
    $result= $conn->query($sql);
    
    $data= $result->fetch_assoc();
    
    $conn->close();

?>

<!DOCTYPE html>
<html>
    <head><title>Edit User</title> </head>
<body>
    <h2>Edit User Details</h2>
<form action="../user_db_action/user_edit.php" method="POST">

<label for="User Name">User Name: </label>
<input type="text" name="user_name" value="<?php echo $data['user_name'] ?>"><br><br>

<label for="Password">Password:</label>
<input type="text" name="password" value="<?php echo $data['password'] ?>"><br><br>

<label for="Email">Email:</label>
<input type="text" name="email" value="<?php echo $data['email'] ?>"><br><br>

<label for="Mobile Number">Mobile Number:</label>
<input type="text" name="mobile_no" value="<?php echo $data['mobile_no'] ?>"><br><br>

    
<input type="hidden" name="id" value="<?php echo $data['id'] ?>"><br><br>
<input type="Submit" name="Submit" value="Save Changes"> 

</form>

</body>
</html>
<?php
}

?>