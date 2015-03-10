<!DOCTYPE html>
<html>
<head> 
<title>PHP MySQL Update Data</title> 
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

$sql = "UPDATE MyGuests SET lastname='Daffy' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>