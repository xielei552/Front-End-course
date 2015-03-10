<!DOCTYPE html>
<html>
<head> 
<title>PHP MySQL Insert Data</title> 
<body>

<?php
$servername = "localhost";
$username = "dsilver";
$password = "dsilver";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Bill', 'Buffalo', 'bill@example.com')";
//VALUES ('Jim', 'Nasium', 'jim@example.com')";
//VALUES ('Jane', 'Liscum', 'jane@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>