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


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Input ten Elements in an Array and display it on the Output Screen.</div><center><button id='62' class='buttonclass'>Solution</button></center><div id='162' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to count total number of Array Elements by using <b>sizeof( )</b> Operator.</div><center><button id='111' class='buttonclass'>Solution</button></center><div id='1111' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to print Array Elements in Reverse Order.</div><center><button id='63' class='buttonclass'>Solution</button></center><div id='163' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Print Alternate Element of an Array.</div><center><button id='113' class='buttonclass'>Solution</button></center><div id='1113' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
	 
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Addition of Corresponding Elements of two Arrays.</div><center><button id='64' class='buttonclass'>Solution</button></center><div id='164' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To Find Sum of All the Elements of an Array.</div><center><button id='65' class='buttonclass'>Solution</button></center><div id='165' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To Count number of Array Elements divisible by two.</div><center><button id='66' class='buttonclass'>Solution</button></center><div id='166' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To Find Largest Element in an Array.</div><center><button id='67' class='buttonclass'>Solution</button></center><div id='167' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">To Find second largest Element in an Array.</div><center><button id='112' class='buttonclass'>Solution</button></center><div id='1112' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Insert Element at any particular position in an Array.</div><center><button id='68' class='buttonclass'>Solution</button></center><div id='168' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Delete an Element  from the Array.</div><center><button id='69' class='buttonclass'>Solution</button></center><div id='169' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Cyclically Permute the Elements of an Array.</div><center><button id='114' class='buttonclass'>Solution</button></center><div id='1114' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	
	<hr color='blue'>

	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Merge Two Arrays.</div><center><button id='70' class='buttonclass'>Solution</button></center><div id='170' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to arrange the Array Elements in Ascending Order.</div><center><button id='73' class='buttonclass'>Solution</button></center><div id='173' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to arrange the Array Elements in Descending Order.</div><center><button id='74' class='buttonclass'>Solution</button></center><div id='174' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Majority Element in an Array.</div><center><button id='115' class='buttonclass'>Solution</button></center><div id='115' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Implement Double Dimension Array.</div><center><button id='189' class='buttonclass'>Solution</button></center><div id='1189' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Access Double Dimension Array Elements using Pointer.</div><center><button id='190' class='buttonclass'>Solution</button></center><div id='1190' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Add Two Matrices.</div><center><button id='191' class='buttonclass'>Solution</button></center><div id='1191' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Find Transpose of a Matrix.</div><center><button id='192' class='buttonclass'>Solution</button></center><div id='1192' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Sum of Matrix Elements.</div><center><button id='193' class='buttonclass'>Solution</button></center><div id='1193' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Sum of Diagonal Elements of a Matrix.</div><center><button id='194' class='buttonclass'>Solution</button></center><div id='1194' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to find Determinant of a 3*3 Matrix.</div><center><button id='195' class='buttonclass'>Solution</button></center><div id='1195' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Program to Search any Specific Element in a Matrix.</div><center><button id='196' class='buttonclass'>Solution</button></center><div id='1196' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>

<div align='justify' style="margin: 0px; padding: 5px; font-size: 14px; padding-left: 7px">Passing Array as a Function Argument.</div><center><button id='197' class='buttonclass'>Solution</button></center><div id='1197' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
</div>
	
<hr color='blue'>





    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

