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




<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Creation of Classes and Objects.</div><center><button id='226' class='buttonclass'>Solution</button></center><div id='1226' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>



<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Accessing Public Data Members and Member Functions.</div><center><button id='227' class='buttonclass'>Solution</button></center><div id='1227' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Accessing Private Data Members and Member Functions.</div><center><button id='228' class='buttonclass'>Solution</button></center><div id='1228' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Creation of Objects Using Pointers.</div><center><button id='229' class='buttonclass'>Solution</button></center><div id='1229' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Scope Resolution Operator: Defining Methods Outside Class body.</div><center><button id='230' class='buttonclass'>Solution</button></center><div id='1230' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Access Private Member Functions.</div><center><button id='231' class='buttonclass'>Solution</button></center><div id='1231' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Constructors in Object Oriented Programming.</div><center><button id='232' class='buttonclass'>Solution</button></center><div id='1232' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Parameterized Constructor.</div><center><button id='233' class='buttonclass'>Solution</button></center><div id='1233' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Implement Constructor Overloading.</div><center><button id='234' class='buttonclass'>Solution</button></center><div id='1234' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Destructor in a class.</div><center><button id='235' class='buttonclass'>Solution</button></center><div id='1235' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to release allocated memory using Destructor.</div><center><button id='236' class='buttonclass'>Solution</button></center><div id='1236' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Static Keyword.</div><center><button id='237' class='buttonclass'>Solution</button></center><div id='1237' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Use of Static Variables in a Class.</div><center><button id='238' class='buttonclass'>Solution</button></center><div id='1238' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Static Methods in a Class.</div><center><button id='239' class='buttonclass'>Solution</button></center><div id='1239' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Friend Function Implementation.</div><center><button id='240' class='buttonclass'>Solution</button></center><div id='1240' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Class as a Friend.</div><center><button id='241' class='buttonclass'>Solution</button></center><div id='1241' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Friend Function's Real-world Example.</div><center><button id='242' class='buttonclass'>Solution</button></center><div id='1242' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Inheritance.</div><center><button id='246' class='buttonclass'>Solution</button></center><div id='1246' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Inheritance using Protected Access Specifier.</div><center><button id='247' class='buttonclass'>Solution</button></center><div id='1247' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Protected Inheritance.</div><center><button id='248' class='buttonclass'>Solution</button></center><div id='1248' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

