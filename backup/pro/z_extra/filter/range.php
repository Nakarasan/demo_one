<?php
	require_once'../db_action/db_connection.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `new_book` WHERE date(`date`) BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['date']?></td>
		<td><?php echo $fetch['hall']?></td>
		<td><?php echo $fetch['evetype']?></td>
		<td><?php echo $fetch['stime']?></td>
		<td><?php echo $fetch['etime']?></td>

	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `new_book`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['date']?></td>
		<td><?php echo $fetch['hall']?></td>
		<td><?php echo $fetch['evetype']?></td>
		<td><?php echo $fetch['stime']?></td>
		<td><?php echo $fetch['etime']?></td>
	</tr>
<?php
		}
	}
?>
