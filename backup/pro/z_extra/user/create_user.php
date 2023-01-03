<!DOCTYPE html>
<html>
    <head><title>Create User</title> </head>
<body>
    <h2>Create User Account</h2>
<form action="../user_db_action/user_cre.php" method="POST">

<label for="User Name">User Name:</label>
<input type="text" name="user_name"><br><br>
<label for="Password">Password:</label>
<input type="text" name="password"><br><br>
<label for="Email Id">Email Id:</label>
<input type="text" name="email"><br><br>
<label for="Mobile Number">Mobile Number:</label>
<input type="text" name="mobile_no"><br><br>

<input type="Submit" name="Submit" value="Submit"> 
<a href='view_user.php'><button type='button'>View</button>
</form>

</body>
</html>
