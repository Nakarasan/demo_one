<?php
    require_once'../db_action/db_connection.php';

if($_GET['id']) {
    $id = $_GET['id'];
    $sql= "SELECT * FROM user_tbl WHERE id= {$id}";
    $result= $conn->query($sql);
    
    $data= $result->fetch_assoc();
    
    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove User</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="../db_action/user_dlt_act.php" method="POST">
    
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
    <button type="submit">Confirm to remove</button>
    <a href="view_user.php"><button type="button">Back</button></a>

</form>

</body>
</html>
    
