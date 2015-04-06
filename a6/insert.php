<?php
require_once('conn.php');
$fn= $_POST['first_name'];
$ln= $_POST['last_name'];
$ad= $_POST['address'];
$pn= $_POST['phone_number'];
$br= $_POST['billing_rate'];
$sql = "INSERT INTO employee_records (first_name, last_name, address, phone_number, billing_rate) VALUES ('$fn', '$ln','$ad','$pn','$br')";
$conn->query($sql);
header("location:home.php?action");
?>
