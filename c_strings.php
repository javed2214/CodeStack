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


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to print <b>'HELLO'</b> using Character Array.</div><center><button id='90' class='buttonclass'>Solution</button></center><div id='190' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to print String using Pointer Variable.</div><center><button id='91' class='buttonclass'>Solution</button></center><div id='191' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to read and display any String using <b>gets( )</b> and <b>puts( )</b> function.</div><center><button id='92' class='buttonclass'>Solution</button></center><div id='192' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to count total number of characters in a String without using in built function.</div><center><button id='93' class='buttonclass'>Solution</button></center><div id='193' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
	<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to count total number of characters in a String using <b>strlen()</b> function.</div><center><button id='94' class='buttonclass'>Solution</button></center><div id='194' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to convert any String into Lower Case using <b>strlwr( )</b> function.</div><center><button id='95' class='buttonclass'>Solution</button></center><div id='195' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to convert any String into Upper Case using <b>strupr( )</b> function.</div><center><button id='96' class='buttonclass'>Solution</button></center><div id='196' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Concatenate/Append one String to other using <b>strcat( )</b> function.</div><center><button id='97' class='buttonclass'>Solution</button></center><div id='197' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Copy one String to other using <b>strcpy( )</b> function.</div><center><button id='98' class='buttonclass'>Solution</button></center><div id='198' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to check whether the two Strings are similar or not using <b>strcmp( )</b> function.</div><center><button id='99' class='buttonclass'>Solution</button></center><div id='199' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse any String using <b>strrev( )</b> function.</div><center><button id='100' class='buttonclass'>Solution</button></center><div id='1100' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to print all the 255 Characters with their <b>ASCII</b> value.</div><center><button id='101' class='buttonclass'>Solution</button></center><div id='1101' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to check whether the String is Palindrome or Not.</div><center><button id='102' class='buttonclass'>Solution</button></center><div id='1102' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Count number of Vowels, Consonants, Digits, Spaces and Special Characters in a String.</div><center><button id='103' class='buttonclass'>Solution</button></center><div id='1103' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find the frequency of any Character in a String.</div><center><button id='104' class='buttonclass'>Solution</button></center><div id='1104' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Sort Elements in Lexicographical Order (Dictionary Order).</div><center><button id='105' class='buttonclass'>Solution</button></center><div id='1105' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to search any particular word in the Sentence.</div><center><button id='108' class='buttonclass'>Solution</button></center><div id='1108' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Delete all the Vowels from a String.</div><center><button id='106' class='buttonclass'>Solution</button></center><div id='1106' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Write a program that takes a set of names of individuals and abbreviates the first, middle and other names except the last name by their first Letter.</div><center><button id='107' class='buttonclass'>Solution</button></center><div id='1107' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Reverse any String without using Inbuilt Function.</div><center><button id='133' class='buttonclass'>Solution</button></center><div id='1133' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	



    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

