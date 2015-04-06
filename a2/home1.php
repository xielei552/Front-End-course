<?PHP
if($_REQUEST['action']=='edit')
{
?>
 <form id="form2" name="form2" method="post" action="update2.php?id=<?PHP echo $_REQUEST['id2']; ?>" onSubmit="return validateForm();">
 <table width="200" border="1">
   <tr>
     <td>first name</td>
     <td><label for="first_name2"></label>
        <input type="text" name="first_name2" id="first_name2" value="<?PHP echo $_REQUEST['fn2']; ?>" /></td>
    </tr>
   <tr>
     <td>last name</td>
     <td><label for="last_name2"></label>
       <input type="text" name="last_name2" id="last_name2" value="<?PHP echo $_REQUEST['ln2']; ?>" /></td>
   </tr>
   <tr>
     <td>address</td>
     <td><label for="address2"></label>
     <input type="text" name="address2" id="address2" value="<?PHP echo $_REQUEST['ad']; ?>" /></td>
     <tr>
     <td>phone number</td>
     <td><label for="phone_number2"></label>
     <input type="text" name="phone_number2" id="phone_number2" value="<?PHP echo $_REQUEST['pn2']; ?>" /></td>
     <tr>
     <td>health card number</td>
     <td><label for="health_card_number"></label>
     <input type="text" name="health_card_number" id="health_card_number" value="<?PHP echo $_REQUEST['hcn']; ?>" /></td>
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
 <form id="form1" name="form1" method="post" action="insert2.php" onSubmit="return validateForm();">
 <table width="300" border="1">
 <tr>
 <td>first name</td>
 <td><label for="first_name2"></label>
 <input type="text" name="first_name2" id="first_name2" value="" /></td>
 </tr>
 <tr>
 <td>last name</td>
 <td><label for="last_name2"></label>
 <input type="text" name="last_name2" id="last_name2" value="" /></td>
 </tr>
 <tr>
 <td>address</td>
 <td><label for="address2"></label>
 <input type="text" name="address2" id="address2" value="" /></td>
 </tr>
 <tr>
 <td>phone number</td>
 <td><label for="phone_number2"></label>
 <input type="text" name="phone_number2" id="phone_number2" value="" /></td>
 </tr>
 <tr>
 <td>health card number</td>
 <td><label for="health_card_number"></label>
 <input type="text" name="health_card_number" id="health_card_number" value="" /></td>
 </tr>
 <tr>
 <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
 <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
 </tr>
 </table>

 </form>
 <?PHP } ?>
<?php
    require_once('conn.php');
    $sql = "SELECT * FROM patiemt_records";
    $result = $conn->query($sql);

    echo "<table border='2'>";
    echo "<th>first name</th><th>last name</th><th>address</th><th>phone number</th><th>health card number</th>";
    while($row=$result->fetch_assoc())
    { echo "<tr>";
    $idn2=$row['id2'];$fn2=$row['first_name2'];$ln2=$row['last_name2'];$ad2=$row['address2'];$pn2=$row['phone_number2'];$hcn=$row['health_car_number'];
    echo "<td>".$row['first_name2']." </td>";
    echo "<td>".$row['last_name2']."</td>";
    echo "<td>".$row['address2']."</td>";
    echo "<td>".$row['phone_number2']."</td>";
    echo "<td>".$row['health_card_number']."</td>";
    echo "<td><a href='delete2.php?id2=$idn2'>Delete</a></td>
        <td><a href='home.php?id2=$idn2&action=edit&fn2=$fn2&ln2=$ln2&ad=$ad&pn2=$pn2&hcn=$hcn'>Edit</a></td>";
    echo "</tr>";
    }
    echo "</table>";

?>
