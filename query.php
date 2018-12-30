<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
		<h1 class="brand"><a href="index.php"><span style='font-family: impact;color: red;font-size: 50px;font-weight: bolder;'>Code</span><span style='font-family: impact;color: white;font-size: 50px;font-weight: lighter'>Stack</span></a></h1>
		<ul style="padding-top:16px;">
				<li><a href="index.php">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="query.php">Query</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="#">About</a></li>
		</ul>
		<div style="clear: both"></div>
	</nav>
	<div class="responsive-bar" style="padding: 20px;padding-left:5px;">
		<h3 class="brand"><a href="index.php"><span style='font-family: impact;color: red;font-size: 35px;font-weight: bolder;'>Code</span><span style='font-family: impact;color: white;font-size: 35px;font-weight: bolder;'>Stack</span></a></h3>
		<h4 class="menu" style="margin-top: 10px;">Menu</h4>
		<div style="clear: both"></div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".menu").click(function(){
				$("nav").slideToggle(450);
			});
		});
	</script>
	<br>
	<div class="queryContainer">
		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			<center>
			<table>
				<tr>
					<td><input type="text" placeholder="Name" name="username" size="22" required pattern='[a-z A-Z]+'></td>	
				</tr>
				<tr>
					<td> </td>
				</tr>
				<tr>
					<td><input type="email" placeholder="Email ID" name="useremail" size="22" required></td>
				</tr>
				<tr>
					<td> </td>
				</tr>
				<tr>
					<td><textarea  placeholder='Query/Feedback' name='userquery' rows='9' cols='35' required attern='[a-z A-Z]+'></textarea></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset">
			</center>
		</form>
	</div><br>
	
	</body>
</html>

<?php

include 'queryConnection.php';

$username = isset($_GET['username']) ? $_GET['username'] : '';
$useremail = isset($_GET['useremail']) ? $_GET['useremail'] : '';
$userquery = isset($_GET['userquery']) ? $_GET['userquery'] : '';

if(isset($_GET['submit']))
{
	$sql="Insert into query (username, useremail, userquery) value ('$username', '$useremail', '$userquery');";
	$result=mysqli_query($conn, $sql);
	echo "<center><font style='font-size: 13px; color: green;'>Query Submitted !</font><center>";
}

?>

	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>