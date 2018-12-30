<?php
include 'dbhelper.php';
?>


<!DOCTYPE html>
<html>
<head>
    <style>
    
    .buttonclass
{
	cursor: pointer;
	font-size: 11px;
	border-radius: 4px;
	font-family: cambria;
	background: rgb(0,128,64);
	color: white;
	border: 1px solid rgb(0,157,79);
	padding: 4px;
}
    </style>
    
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
	
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function() {
	
			$(".buttonclass").click(function() {
			    
				var idd=$(this).attr("id");
			
			    	$('#1'+idd).load("load-programs.php", {idfetch: idd
                        
					});
				});
			});
	
	</script>
<br>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px;">Program to Add two Numbers using Recursion.</div><center><button id='140' class='buttonclass'>Solution</button></center><div id='1140' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Sum of 'n' Natural numbers using Recursion.</div><center><button id='128' class='buttonclass'>Solution</button></center><div id='1128' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Product of 'n' Natural numbers using Recursion.</div><center><button id='131' class='buttonclass'>Solution</button></center><div id='1131' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Square of any Integer using Recursion.</div><center><button id='145' class='buttonclass'>Solution</button></center><div id='1145' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Factorial of a Number using Recursion.</div><center><button id='129' class='buttonclass'>Solution</button></center><div id='1129' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Generate Fibonacci Series using Recursion.</div><center><button id='132' class='buttonclass'>Solution</button></center><div id='1132' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Print Sum of Fibonacci Series using Recursion.</div><center><button id='130' class='buttonclass'>Solution</button></center><div id='1130' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Cube of any Number using Recursion.</div><center><button id='146' class='buttonclass'>Solution</button></center><div id='1146' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Multiply two Numbers using Recursion.</div><center><button id='134' class='buttonclass'>Solution</button></center><div id='1134' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Calculate a to the Power b using Recursion.</div><center><button id='135' class='buttonclass'>Solution</button></center><div id='1135' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Calculate Number of Digits using Recursion.</div><center><button id='136' class='buttonclass'>Solution</button></center><div id='1136' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Calculate Sum of Digits using Recursion.</div><center><button id='139' class='buttonclass'>Solution</button></center><div id='1139' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Print Sum of Cube of n Numbers using Recursion.</div><center><button id='147' class='buttonclass'>Solution</button></center><div id='1147' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse any Number using Recursion.</div><center><button id='137' class='buttonclass'>Solution</button></center><div id='1137' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse any String using Recursion.</div><center><button id='138' class='buttonclass'>Solution</button></center><div id='1138' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Whether the Number is Palindrome or Not using Recursion.</div><center><button id='141' class='buttonclass'>Solution</button></center><div id='1141' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Display All Array Elements of Array using Recursion.</div><center><button id='142' class='buttonclass'>Solution</button></center><div id='1142' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Sum of All Array Elements using Recursion.</div><center><button id='143' class='buttonclass'>Solution</button></center><div id='1143' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Print all Permutations of String or Integers using Recursion.</div><center><button id='148' class='buttonclass'>Solution</button></center><div id='1148' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find All Possible Subsequences of a String.</div></div><center><button id='267' class='buttonclass'>Solution</button></center><div id='1267' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

