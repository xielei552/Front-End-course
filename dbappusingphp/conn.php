<?php
$servername = "localhost";
$username = "db";
$password = "Een7WruJjD852ycn";

// Create connection
$conn = mysqli_connect($servername,$username,$password,"db");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); } 
?>
