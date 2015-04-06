<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$fn= $_POST['first_name'];
$ln= $_POST['last_name'];
$ad= $_POST['address'];
$pn= $_POST['phone_number'];
$br= $_POST['billing_rate'];
$sql="UPDATE employee_records SET first_name='$fn',last_name='$ln',address='$ad',phone_number='$pn',billing_rate='$br' where id=$idp";
$conn->query($sql);
header("location:home.php?action");
?>
