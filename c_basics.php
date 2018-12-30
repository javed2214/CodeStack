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


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to print "Hello World" on the Output Screen.</div><center><button id='1' class='buttonclass'>Solution</button></center><div id='11' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find Sum of two Integers.</div><center><button id='2' class='buttonclass'>Solution</button></center><div id='12' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to design a simple Calculator.</div><center><button id='3' class='buttonclass'>Solution</button></center><div id='13' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>

	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find sum of 'n' Numbers.</div><center><button id='4' class='buttonclass'>Solution</button></center><div id='14' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find Product of 'n' Numbers.</div><center><button id='5' class='buttonclass'>Solution</button></center><div id='15' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
    <hr color='blue'>
    
    
    
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to check whether the year is Leap year or Not.</div><center><button id='109' class='buttonclass'>Solution</button></center><div id='1109' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
    <hr color='blue'>
    
    
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Input radius and find out the Volume and Area of Sphere.</div><center><button id='6' class='buttonclass'>Solution</button></center><div id='16' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Input any Number and find out its Square and Cube.</div><center><button id='7' class='buttonclass'>Solution</button></center><div id='17' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
    <hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find Greatest of the three Numbers.</div><center><button id='8' class='buttonclass'>Solution</button></center><div id='18' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Input basic salary and find out DA(55% of basic salary), HRA(15% of basic salary), CCA(Rs. 500) and PF(12% of basic salary). Also calculate the Net Salary.</div><center><button id='9' class='buttonclass'>Solution</button></center><div id='19' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
    <hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Swap two Numbers.</div><center><button id='10' class='buttonclass'>Solution</button></center><div id='110' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Swap two Numbers without using third Variable.</div><center><button id='85' class='buttonclass'>Solution</button></center><div id='185' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to print "Hello World!" without using Semicolon.</div><center><button id='86' class='buttonclass'>Solution</button></center><div id='186' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
	<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to check whether the Number is Odd or Even without using modulo(%) Operator.</div><center><button id='87' class='buttonclass'>Solution</button></center><div id='187' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Reverse any Number.</div><center><button id='12' class='buttonclass'>Solution</button></center><div id='112' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find whether the Number is Palindrome or not.</div><center><button id='13' class='buttonclass'>Solution</button></center><div id='113' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find whether the Number is Prime or not.</div><center><button id='14' class='buttonclass'>Solution</button></center><div id='114' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find whether the Number is Armstromg or not.</div><center><button id='15' class='buttonclass'>Solution</button></center><div id='115' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
		
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Input any Number and find its Prime Factor.</div><center><button id='16' class='buttonclass'>Solution</button></center><div id='116' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Check Whether the Number is Armstrong or Not.</div><center><button id='144' class='buttonclass'>Solution</button></center><div id='1144' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to convert Decimal number into Binary.</div><center><button id='17' class='buttonclass'>Solution</button></center><div id='117' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to convert Binary Number into Decimal.</div><center><button id='18' class='buttonclass'>Solution</button></center><div id='118' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to convert Decimal Number to Octal.</div><center><button id='19' class='buttonclass'>Solution</button></center><div id='119' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
    <hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Print Fibonacci Series.</div><center><button id='20' class='buttonclass'>Solution</button></center><div id='120' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>
	 
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find LCM of two Numbers.</div><center><button id='71' class='buttonclass'>Solution</button></center><div id='171' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>
	 
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to find HCF of two Numbers.</div><center><button id='72' class='buttonclass'>Solution</button></center><div id='172' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to print System's Current Date.</div><center><button id='89' class='buttonclass'>Solution</button></center><div id='189' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px">Program to Add two Time.</div><center><button id='125' class='buttonclass'>Solution</button></center><div id='1125' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	 <hr color='blue'>



    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

