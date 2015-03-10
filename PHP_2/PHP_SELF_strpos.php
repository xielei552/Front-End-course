<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $keyword = test_input($_POST["keyword"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>String search using PHP_SELF recursion</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Enter the keyword to search the sentence below: <input type="text" name="keyword">
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php

$txt1 = "The rain in Spain falls mainly on the plain, what a shame.";
echo "<i>Sentence: </i><br>";
echo $txt1;
echo "<br> <i>Search response: </i><br>";
echo "The position of '", $keyword ,"' is at ", strpos($txt1, $keyword);
echo "<br>";
?>  
  
</body>
</html>