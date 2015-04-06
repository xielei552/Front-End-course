<html>
<head>
<title>FeelBetter Physiotherapy Clinic</title>
<link href="Site.css" rel="stylesheet">
</head>

<body>
<nav id="nav01"></nav> 
<div id="main">
<h1>FeelBetter Physiotherapy Clinic</h1>
<h2>Design by: Lei Xie   123800x</h2>
<?PHP 
if($_REQUEST['action']=='edit')
{
?>

<form id="form1" name="form1" method="post" action="update.php?id=<?PHP echo $_REQUEST['id']; ?>" onSubmit="return validateForm();">
<table width="200" border="1">
  <tr>
    <td>first name</td>
    <td><label for="first_name"></label>
       <input type="text" name="first_name" id="first_name" value="<?PHP echo $_REQUEST['fn']; ?>" /></td>
   </tr>
  <tr>
    <td>last name</td>
    <td><label for="last_name"></label>
      <input type="text" name="last_name" id="last_name" value="<?PHP echo $_REQUEST['ln']; ?>" /></td>
  </tr>
  <tr>
    <td>address</td>
    <td><label for="address"></label>
      <input type="text" name="address" id="address" value="<?PHP echo $_REQUEST['ad']; ?>" /></td>
  <tr>
    <td>phone_number</td>
    <td><label for="phone_number"></label>
      <input type="text" name="phone_number" id="phone_number" value="<?PHP echo $_REQUEST['pn']; ?>" /></td>
  <tr>
    <td>billing rate</td>
    <td><label for="billing_rate"></label>
      <input type="text" name="billing_rate" id="billing_rate" value="<?PHP echo $_REQUEST['br']; ?>" /></td>
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>

</form>
<?PHP
}
else
{
?>
<form id="form1" name="form1" method="post" action="insert.php" onSubmit="return validateForm();">
<table width="300" border="1">
  <tr>
    <td>first name</td>
    <td><label for="first_name"></label>
       <input type="text" name="first_name" id="first_name" value="" /></td>
   </tr>
  <tr>
    <td>last name</td>
    <td><label for="last_name"></label>
      <input type="text" name="last_name" id="last_name" value="" /></td>
  </tr>
  <tr>
    <td>address</td>
    <td><label for="address"></label>
      <input type="text" name="address" id="address" value="" /></td>
  </tr>
  <tr>
    <td>phone number</td>
    <td><label for="phone_number"></label>
      <input type="text" name="phone_number" id="phone_number" value="" /></td>
  </tr>
  <tr>
    <td>billing rate</td>
    <td><label for="billing_rate"></label>
      <input type="text" name="billing_rate" id="billing_rate" value="" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>

</form>
<?PHP } ?>
<p id="errorMessage" style="color:#C00; font-style:italic;"></p>

<?php
    require_once('conn.php');
    $sql = "SELECT * FROM employee_records";
    $result = $conn->query($sql);

    echo "<table border='2'>";
    echo "<th>ID</th><th>first name</th><th>last name</th><th>address</th><th>phone number</th><th>billing rate</th>";
    while($row=$result->fetch_assoc())
    { echo "<tr>";
    $idn=$row['id'];$fn=$row['first_name'];$ln=$row['last_name'];$ad=$row['address'];$pn=$row['phone_number'];$br=$row['billing_rate'];
    
    echo "<td>".$row['id']." </td>";
    echo "<td>".$row['first_name']." </td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phone_number']."</td>";
    echo "<td>".$row['billing_rate']."</td>";
    echo "<td><a href='delete.php?id=$idn'>Delete</a></td>
        <td><a href='home.php?id=$idn&action=edit&fn=$fn&ln=$ln&ad=$ad&pn=$pn&br=$br'>Edit</a></td>";
    echo "</tr>";
    }
    echo "</table>";

?>

<footer id="foot01"></footer>
</div>
<script src="Script.js"></script>
</body>
</html>
