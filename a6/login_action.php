<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
$string = file_get_contents ("account.json");
$account = json_decode($string, true);

$username = $_POST["username"];
$password = $_POST["password"];
$loginOK = false;

if ($username == $account['account'][UID] && $password == $account['account'][PWD]) {
    $loginOK = true;
}
if ($loginOK) {
    echo "You are logged in. Welcom! ";
    echo $username;
    echo "<br>";
    echo '<a href="home.php">click here to start</a>';
} else {
    echo "There are no such user account or wrong password.";
}
?>

</body>
</html>
