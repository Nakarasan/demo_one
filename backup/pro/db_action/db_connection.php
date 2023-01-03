<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fms";

//Create db connection
$conn = new mysqli($localhost, $username, $password, $dbname);

//Check connection
if ($conn -> connect_error){
    die ("Connection Failed: ".$connect->connect_error);
}
else {
    echo "db successfully connected";
}
    
?>