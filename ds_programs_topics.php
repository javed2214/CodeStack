<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="c_programs_topics.css">
	
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

<br><br><br>

<center><div class='programbutton'><a href='c_arrays.php' id='arrays'>Arrays</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='c_pointers.php' id='pointers'>Pointers</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='c_structures.php' id='structures'>Structures</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='c_recursion.php' id='recursion'>Recursion</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_linkedlist.php' id='linkedlist'>Linked List</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_stack.php' id='stack'>Stack</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_queue.php' id='queue'>Queue</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_tree.php' id='tree'>Tree</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_sorting.php' id='strings'>Sorting</a></div></center>
<br><br><br>
<center><div class='programbutton'><a href='ds_hashing.php' id='pointers'>Hashing&nbsp;</a></div></center>

<br><br><br><br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

