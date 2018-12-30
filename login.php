<html>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="signup.css">

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
	<br><br>
	<div class='signup'>
		Login
	</div>
	<br><br>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
<input type = "text" name = "username" class='inputstyle' placeholder="Username" size="25" required pattern="\w{4,10}"/><br><br>
<input type = "password" name = "pass" placeholder="Password" class='inputstyle' size="25" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/><br><br>
<input type = "submit" class="button" name="sub" value="SUBMIT" required/><br><br>
<div class='alreadyregistered'>
	Don't have Account?&nbsp; <a href="signup.php">Sign Up</a>
</div>

</form>

</center>
</body>




</html>

<?php

session_start();

$servername='xxx';
$user='xxx';
$password='xxx';
$dbname='xxx';

$conn = mysqli_connect($servername , $user , $password , $dbname);

$username = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if(isset($_POST['sub']))
{	
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
	$sql="select * from login where username='$username' && pass='$pass'";
	$result=mysqli_query($conn , $sql);

	$row=mysqli_fetch_assoc($result);
	if($row==true)
	{
	  //if($_SERVER['SERVER_PORT']!=443)
	    //{  
	       
            //ob_start();
            //flush();
            $_SESSION['username']=$username;
    		header('location: welcome.php');
    	//	echo '<script>

          //  window.location="/http://codestack.co.in/welcome.php";

            //</script>';
            exit();
    		//echo "<center><font style='color: green'><br>Logged in</font></center>";
    		//header("location:welcome.php");
	    //}
	}
	else
	{
		echo "<font style='color: red; font-size: 13px'><center>Invalid Credentials !</center></font>";
	}
}
	
?>
