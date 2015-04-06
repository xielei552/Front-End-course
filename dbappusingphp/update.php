<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$un= $_POST['username'];
$pd= $_POST['psd'];
$sql="UPDATE tbllogin SET username='$un',psd='$pd' where id=$idp";
$conn->query($sql);
header("location:home.php?action");
?>
