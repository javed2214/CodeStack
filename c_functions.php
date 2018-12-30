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


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Addition of two Numbers using Function.</div><center><button id='21' class='buttonclass'>Solution</button></center><div id='121' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Factorial of any Number using Function.</div><center><button id='22' class='buttonclass'>Solution</button></center><div id='122' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Call by Value (Swapping of Number will not Work).</div><center><button id='23' class='buttonclass'>Solution</button></center><div id='123' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Call by Address.</div><center><button id='24' class='buttonclass'>Solution</button></center><div id='124' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Reverse of any Number using Function.</div><center><button id='25' class='buttonclass'>Solution</button></center><div id='125' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find 'a' to the Power 'b' using Function.</div><center><button id='88' class='buttonclass'>Solution</button></center><div id='188' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To find out largest of the two Number using Function.</div><center><button id='47' class='buttonclass'>Solution</button></center><div id='147' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To find whether the Number is Perfect or Not using Function.</div><center><button id='48' class='buttonclass'>Solution</button></center><div id='148' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To print Table of any Number using Function.</div><center><button id='49' class='buttonclass'>Solution</button></center><div id='149' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Prime Numbers between Two Integers.</div><center><button id='110' class='buttonclass'>Solution</button></center><div id='1110' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find nPr using Function.</div><center><button id='126' class='buttonclass'>Solution</button></center><div id='1126' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find nCr using Function.</div><center><button id='127' class='buttonclass'>Solution</button></center><div id='1127' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>


    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

