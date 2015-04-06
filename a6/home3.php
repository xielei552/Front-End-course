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
<h3>appointment records</h3>
<?PHP 
if($_REQUEST['action']=='edit')
{
?>

<form id="form1" name="form1" method="post" action="update3.php?id=<?PHP echo $_REQUEST['id']; ?>" onSubmit="return validateForm();">
<table width="200" border="1">
  <tr>
    <td>patient</td>
    <td><label for="patient"></label>
       <input type="text" name="patient" id="patient" value="<?PHP echo $_REQUEST['pa']; ?>" /></td>
   </tr>
  <tr>
    <td>employee</td>
    <td><label for="employee"></label>
      <input type="text" name="employee" id="employee" value="<?PHP echo $_REQUEST['em']; ?>" /></td>
  </tr>
  <tr>
    <td>treatment type</td>
    <td><label for="treatment_type"></label>
      <input type="text" name="treatment_type" id="treamment_type" value="<?PHP echo $_REQUEST['tt']; ?>" /></td>
  <tr>
    <td>appointment date</td>
    <td><label for="appointment_date"></label>
      <input type="text" name="appointment_date" id="appointment_date" value="<?PHP echo $_REQUEST['ad']; ?>" /></td>
  <tr>
    <td>appointment time</td>
    <td><label for="appointment_time"></label>
      <input type="text" name="appointment_time" id="appointment_time" value="<?PHP echo $_REQUEST['at']; ?>" /></td>
  <tr>
    <td>appointment duration</td>
    <td><label for="appointment_duration"></label>
      <input type="text" name="appointment_duration" id="appointment_duration" value="<?PHP echo $_REQUEST['apd']; ?>" /></td>
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
<form id="form1" name="form1" method="post" action="insert3.php" onSubmit="return validateForm();">
<table width="300" border="1">
  <tr>
    <td>patient</td>
    <td><label for="patient"></label>
       <input type="text" name="patient" id="patient" value="" /></td>
   </tr>
  <tr>
    <td>employee</td>
    <td><label for="employee"></label>
      <input type="text" name="employee" id="employee" value="" /></td>
  </tr>
  <tr>
    <td>treatment type</td>
    <td><label for="treatment_type"></label>
      <input type="text" name="treatment_type" id="treatment_type" value="" /></td>
  </tr>
  <tr>
    <td>appointment date</td>
    <td><label for="appointment_date"></label>
      <input type="text" name="appointment_date" id="appointment_date" value="" /></td>
  </tr>
  <tr>
    <td>appointment time</td>
    <td><label for="appointment_time"></label>
      <input type="text" name="appointment_time" id="appointment_time" value="" /></td>
  </tr>
  <tr>
    <td>appointment duration</td>
    <td><label for="appointment_duration"></label>
      <input type="text" name="appointment_duration" id="appointment_duration" value="" /></td>
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
    $sql = "SELECT * FROM appointment";
    $result = $conn->query($sql);

    echo "<table border='2'>";
    echo "<th>ID</th><th>patient</th><th>employee</th><th>treatment type</th><th>appointment date</th><th>appointment time</th><th>appointment duration</th>";
    while($row=$result->fetch_assoc())
    { echo "<tr>";
    $idn=$row['id'];$pa=$row['patient'];$em=$row['employee'];$tt=$row['treatment_type'];$ad=$row['appointment_date'];$at=$row['appointment_time'];$apd=$row['appointment_duration'];
    
    echo "<td>".$row['id']." </td>";
    echo "<td>".$row['patient']." </td>";
    echo "<td>".$row['employee']."</td>";
    echo "<td>".$row['treatment_type']."</td>";
    echo "<td>".$row['appointment_date']."</td>";
    echo "<td>".$row['appointment_time']."</td>";
    echo "<td>".$row['appointment_duration']."</td>";
    echo "<td><a href='delete3.php?id=$idn'>Delete</a></td>
        <td><a href='home3.php?id=$idn&action=edit&pa=$pa&em=$em&tt=$tt&ad=$ad&bat=$at&apd=$apd'>Edit</a></td>";
    echo "</tr>";
    }
    echo "</table>";

?>

<footer id="foot01"></footer>
</div>
<script src="Script.js"></script>
</body>
</html>
