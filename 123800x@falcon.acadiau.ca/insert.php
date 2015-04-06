<?php
require_once('conn.php');
$un= $_POST['username'];
$pd= $_POST['psd'];
$sql = "INSERT INTO tbllogin (username, psd) VALUES ('$un', '$pd')";
$conn->query($sql);
header("location:home.php?action");
?>
