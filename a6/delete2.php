<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$sql = "delete  FROM patient_records where id=$idp";
$conn->query($sql);
header("location:home2.php?action");
?>
