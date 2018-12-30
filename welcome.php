<?php

session_start();

if($_SESSION['username']==true)
{
	echo "Welcome ".$_SESSION['username'];
}
else
{
	header('location:login.php');
}

?>

<br><br>
<a href="logout.php">Logout</a>