<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$pa= $_POST['patient'];
$em= $_POST['employee'];
$tt= $_POST['treatment_type'];
$ad= $_POST['appointment_date'];
$at= $_POST['appointment_time'];
$apd= $_POST['appointment_duration'];
$sql="UPDATE appointment SET patient='$pa',employee='$em',treatment_type='$tt',appointment_date='$ad',appointment_time='$at',appointment_duration='$apd' where id=$idp";
$conn->query($sql);
header("location:home3.php?action");
?>
