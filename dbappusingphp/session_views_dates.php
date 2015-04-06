<?php
	
	session_start();
	 //print_r($_SERVER);
	 //	echo '<br><br>';
     // var_dump($_SERVER);
	$_SESSION['viewcount']++;
	
	if ($_SESSION['viewcount'] > 5)
		session_destroy();
	$_SESSION['user'] = array('first' => 'Danny', 'last' => 'Silver');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8 />
    <title>Comp 2513</title>
  </head>

  <body>
    <h1>Hello World!</h1>
	<p>Number of Visits: <?php echo $_SESSION['viewcount'];?> </p>
	 <h1>-----------</h1>
	 
<?php

	echo 'The session ID = '.session_id();
	echo '<br><br>';
	print_r($_SESSION);
	
	print_r($_COOKIE);
	 
	echo '<p> Welcome back '.$_SESSION['user']['first'].' '.$_SESSION['user']['last'].'</p>';
	
	echo '<br />'.time();
	
	 var_dump($_SERVER['REQUEST_TIME']);
	
	echo '<br />'.date('l F jS, Y H:m.m', $_SERVER['REQUEST_TIME']); 
	
	echo '<br />'.date('m-d-y');
	
	echo '<br />'.date('l F jS');
	
	echo '<br />'.date('l F jS, Y', time() + 1000000000);
	
	echo '<br />'.date('l F jS, Y', strtotime('jan 24, 2004 3:45PM'));
	
	echo '<br />'.date('l F jS, Y', strtotime('next sunday'));
	
?>	
	
	
  </body>
</html>
















