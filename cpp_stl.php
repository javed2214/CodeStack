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




<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Print Array using Standard Template Library.</div><center><button id='249' class='buttonclass'>Solution</button></center><div id='1249' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>



<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Standard Array Methods in STL.</div><center><button id='250' class='buttonclass'>Solution</button></center><div id='1250' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Swap Two Arrays using STL.</div><center><button id='251' class='buttonclass'>Solution</button></center><div id='1251' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Array of Strings.</div><center><button id='252' class='buttonclass'>Solution</button></center><div id='1252' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Pair class in STL.</div><center><button id='253' class='buttonclass'>Solution</button></center><div id='1253' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Pairing of int and class.</div><center><button id='254' class='buttonclass'>Solution</button></center><div id='1254' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Tuple class in STL.</div><center><button id='255' class='buttonclass'>Solution</button></center><div id='1255' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Vector Class in STL.</div><center><button id='256' class='buttonclass'>Solution</button></center><div id='1256' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Push and Pop Operation in Vector Class.</div><center><button id='257' class='buttonclass'>Solution</button></center><div id='1257' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Sum of all the Vector Elements.</div><center><button id='258' class='buttonclass'>Solution</button></center><div id='1258' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Resize Vector at Runtime.</div><center><button id='259' class='buttonclass'>Solution</button></center><div id='1259' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

