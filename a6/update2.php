<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$fn= $_POST['first_name'];
$ln= $_POST['last_name'];
$ad= $_POST['address'];
$pn= $_POST['phone_number'];
$hcn= $_POST['health_card_number'];
$sql="UPDATE patient_records SET first_name='$fn',last_name='$ln',address='$ad',phone_number='$pn',health_card_number='$hcn' where id=$idp";
$conn->query($sql);
header("location:home2.php?action");
?>
