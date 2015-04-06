<?php
require_once('conn.php');
$pa= $_POST['patient'];
$em= $_POST['employee'];
$tt= $_POST['treatment_type'];
$ad= $_POST['appointment_date'];
$at= $_POST['appointment_time'];
$apd= $_POST['appointment_duration'];
$sql = "INSERT INTO appointment (patient, employee, treatment_type, appointment_date, appointment_time, appointment_duration) VALUES ('$pa', '$em','$tt','$ad','$at','$apd')";
$conn->query($sql);
header("location:home3.php?action");
?>
