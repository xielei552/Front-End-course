<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$sql = "delete  FROM employee_records where id=$idp";
$conn->query($sql);
header("location:home.php?action");
?>
