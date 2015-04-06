<?php
require_once('conn.php');
$idp= $_REQUEST['id'];
$sql = "delete  FROM tbllogin where id=$idp";
$conn->query($sql);
header("location:home.php?action");
?>
