<!DOCTYPE html>
<html>
<head> 
<title>PHP MySQL Delete Data</title> 
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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>