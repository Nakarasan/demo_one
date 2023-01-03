<?php
require_once'db_action/db_connection.php';
?>

<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>View Student Details</h2>

<table style="width:100%">
  
<thead>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Telephone Number</th>
    <th>Address</th>
    <th>Option</th>
    </tr>
</thead>
  
<tbody>   
    <?php
    $sql = "Select * From stu_details";
    $result = $conn->query($sql);
    
    if ($result -> num_rows>0) {
    while ($row = $result->fetch_assoc())
    {
    echo "<tr>
    <td>".$row['fname']."</td>
    <td>".$row['lname']."</td>
    <td>".$row['age']."</td>
    <td>".$row['tpnum']."</td>
    <td>".$row['address']."</td>
    <td>
    <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
    <a href='remove.php?id=".$row['id']."'><button type='button'>Delete</button>
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
    <a href="create.php"> <button>ADD</button> </a>
  
</body>
</html>

