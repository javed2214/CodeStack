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




<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Stack Implementation through Static Arrays.</div><center><button id='205' class='buttonclass'>Solution</button></center><div id='1205' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>



<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Stack Implementation through Linked List.</div><center><button id='206' class='buttonclass'>Solution</button></center><div id='1206' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse any String via Static Stack Implementation.</div><center><button id='207' class='buttonclass'>Solution</button></center><div id='1207' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Postfix Expression Evaluation using Stack.</div><center><button id='208' class='buttonclass'>Solution</button></center><div id='1208' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Prefix Expression Evaluation using Stack.</div><center><button id='209' class='buttonclass'>Solution</button></center><div id='1209' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program To Convert Infix Expression to Postfix Expression.</div><center><button id='210' class='buttonclass'>Solution</button></center><div id='1210' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>




<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program To Convert Infix Expression to Prefix Expression.</div><center><button id='211' class='buttonclass'>Solution</button></center><div id='1211' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Create Expression Tree from a Prefix Expression.</div><center><button id='212' class='buttonclass'>Solution</button></center><div id='1212' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Tower of Hanoi Problem.</div><center><button id='213' class='buttonclass'>Solution</button></center><div id='1213' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Stack Implementation in C++.</div><center><button id='243' class='buttonclass'>Solution</button></center><div id='1243' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Postfix Expression Evaluation in C++ using Stack.</div><center><button id='244' class='buttonclass'>Solution</button></center><div id='1244' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack Rights Reserved</font></center>
	</footer>
	

</body>
</html>

