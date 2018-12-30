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

	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Linked List Creation and Display.</div><center><button id='163' class='buttonclass'>Solution</button></center><div id='1163' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Add Node in the Linked List.</div><center><button id='164' class='buttonclass'>Solution</button></center><div id='1164' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Delete Node from the Linked List.</div><center><button id='165' class='buttonclass'>Solution</button></center><div id='1165' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Search any Particular Node from the List on the basis of Entered Data.</div><center><button id='166' class='buttonclass'>Solution</button></center><div id='1166' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Swap Data of two Nodes.</div><center><button id='167' class='buttonclass'>Solution</button></center><div id='1167' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Largest Element in the Linked List.</div><center><button id='168' class='buttonclass'>Solution</button></center><div id='1168' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Center Element of the Linked List.</div><center><button id='169' class='buttonclass'>Solution</button></center><div id='1169' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Largest Element in the Linked List.</div><center><button id='170' class='buttonclass'>Solution</button></center><div id='1170' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to sort Linked List in Ascending Order.</div><center><button id='171' class='buttonclass'>Solution</button></center><div id='1171' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to sort Linked List in Descending Order.</div><center><button id='173' class='buttonclass'>Solution</button></center><div id='1173' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Concatenate two Linked List.</div><center><button id='172' class='buttonclass'>Solution</button></center><div id='1172' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Check Whether the Two Linked Lists are Identical or Not.</div><center><button id='186' class='buttonclass'>Solution</button></center><div id='1186' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Check whether their are Duplicate Nodes in the List or Not.</div><center><button id='174' class='buttonclass'>Solution</button></center><div id='1174' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse the Linked List.</div><center><button id='175' class='buttonclass'>Solution</button></center><div id='1175' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>



<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Check whether the List is Palindrome or Not.</div><center><button id='176' class='buttonclass'>Solution</button></center><div id='1176' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Deletion of Alternate Nodes from the List.</div><center><button id='177' class='buttonclass'>Solution</button></center><div id='1177' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find nth Node from end in the List.</div><center><button id='178' class='buttonclass'>Solution</button></center><div id='1178' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Count Number of times a given Node Data occurs in the Linked List.</div><center><button id='179' class='buttonclass'>Solution</button></center><div id='1179' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Check Whether the Two Linked Lists are Identical or Not.</div><center><button id='188' class='buttonclass'>Solution</button></center><div id='1188' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	



<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Break the Linked List from a Specific Position.</div><center><button id='180' class='buttonclass'>Solution</button></center><div id='1180' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Create and Display Circular Linked List.</div><center><button id='181' class='buttonclass'>Solution</button></center><div id='1181' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Insert Node in a Circular Linked List.</div><center><button id='182' class='buttonclass'>Solution</button></center><div id='1182' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Delete Node from a Circular Linked List.</div><center><button id='183' class='buttonclass'>Solution</button></center><div id='1183' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Implement Double Linked List.</div><center><button id='184' class='buttonclass'>Solution</button></center><div id='1184' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Insert Node in Double Linked List.</div><center><button id='185' class='buttonclass'>Solution</button></center><div id='1185' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Delete any Specific Node from a Double Linked List.</div><center><button id='187' class='buttonclass'>Solution</button></center><div id='1187' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	




    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

