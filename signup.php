<html>
<script src='signupscript.js'></script>


</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
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

<center>
	
	
	<br><div class='signup'>
			Sign Up
	    </div>
	<table>

<form action = "<?php $_PHP_SELF ?>" method = "POST" id="form" onsubmit='return call2();'>

<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "username" class='inputstyle' placeholder="Username" size="25" required pattern="\w{4,10}"/ onfocus='call3();'></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "email" name = "email" class='inputstyle' placeholder="Email ID" size="25" required/></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "password" name = "pass" placeholder="Password" class='inputstyle' size="25" id='pwd' required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/ onfocus='call1();'></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "password" name = "pass" placeholder="Confirm Password" class='inputstyle' id='cpwd' size="25" onkeyup='call()' required/></td><td><img src='white.png' id='result'></td></tr>
</table>
<br>
<input type = "submit" class="button" name="sub" value="SUBMIT" required'><br><br>
<div class='alreadyregistered'>
	Already Registered?&nbsp; <a href="login.php">Login</a>
</div>

</form>

</center>
</body>




</html>

<?php


$servername='xxx';
$username='xxx';
$password='xxx';
$dbname='xxx';

$conn = mysqli_connect($serverName , $username , $password , $dbname);

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';


if(isset($_POST['sub']))
{	
	$sql="Select * from login where username='$username' || email='$email'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	if($row)
	{
		 echo "<font style='color: red; font-family: calibri'><center><br>User Already Exists !</center></font>";
		 die();
	}
        
	else
	{
	$sql="INSERT INTO login (username, email, pass) VALUES ('$username' , '$email' , '$pass')";
	$result=mysqli_query($conn , $sql);

	if($result)
	   echo "<font style='color: green; font-family: calibri'><center><br>Record Submitted !</center></font>";
}	
	}
?>
