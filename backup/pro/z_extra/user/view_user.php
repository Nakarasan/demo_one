<?php
require_once'../db_action/db_connection.php';
?>

<html>
<head><title>View User</title></head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>View User Details</h2>

<table style="width:100%">
  
<thead>
    <tr>
    <th>User Name</th>
    <th>Password</th>
    <th>Email</th>
    <th>Mobile No</th>
    
    <th>Option</th>
    </tr>
</thead>
  
<tbody>   
    <?php
    $sql = "Select * From user_management";
    $result = $conn->query($sql);
    
    if ($result -> num_rows>0) {
    while ($row = $result->fetch_assoc())
    {
    echo "<tr>
    <td>".$row['user_name']."</td>
    <td>".$row['password']."</td>
    <td>".$row['email']."</td>
    <td>".$row['mobile_no']."</td>
   
    <td>
    <a href='edit_user.php?id=".$row['id']."'><button type='button'>Edit</button></a>
    <a href='delete_user.php?id=".$row['id']."'><button type='button'>Delete</button> 
    
    </td>
    </tr> ";    
    }
    } else {
        echo "<tr><td colspan=5><center>No Data Available Right Now </center></td></tr>";
    }
    ?>
</tbody>
    
</table>
    
    <br><br> 
    <a href="create_new_user.php"> <button>ADD User</button> </a>
  
</body>
</html>

