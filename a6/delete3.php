<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$sql = "delete  FROM appointment where id=$idp";
$conn->query($sql);
header("location:home3.php?action");
?>
