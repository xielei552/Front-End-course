<?php
$servername = "localhost";
$username = "123800x";
$password = "gubucFuob7";

// Create connection
$conn = mysqli_connect($servername,$username,$password,"123800x_db");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); } 
?>
