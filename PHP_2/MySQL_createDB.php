<!DOCTYPE html>
<html>
<head> 
<title>PHP MySQL Create a DB</title> 
<body>

<?php
$servername = "localhost";
//$servername = "127.0.0.1";
$username = "dsilver";
$password = "dsilver";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

</body>
</html>