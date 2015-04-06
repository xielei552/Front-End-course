<?php
require_once('conn.php');
$fn= $_POST['first_name'];
$ln= $_POST['last_name'];
$ad= $_POST['address'];
$pn= $_POST['phone_number'];
$hcn= $_POST['health_card_number'];
$sql = "INSERT INTO patient_records (first_name, last_name, address, phone_number, health_card_number) VALUES ('$fn', '$ln','$ad','$pn','$hcn')";
$conn->query($sql);
header("location:home2.php?action");
?>
