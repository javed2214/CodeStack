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


<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 1<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 20px'><br><br>* * * * *<br>* * * * *<br>* * * * *<br>* * * * *<br>* * * * *</font></b></div><center><button id='50' class='buttonclass'>Solution</button></center><div id='150' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 2<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1 2 3 4 5<br>1 2 3 4 5<br>1 2 3 4 5<br>1 2 3 4 5<br>1 2 3 4 5</font></b></div><center><button id='51' class='buttonclass'>Solution</button></center><div id='151' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	 
	 
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 3<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1 3 5 7 9<br>1 3 5 7 9<br>1 3 5 7 9<br>1 3 5 7 9<br>1 3 5 7 9</font></b></div><center><button id='52' class='buttonclass'>Solution</button></center><div id='152' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 4<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1 1 1 1 1<br>2 2 2 2 2<br>3 3 3 3 3<br>4 4 4 4 4<br>5 5 5 5 5</font></b></div><center><button id='53' class='buttonclass'>Solution</button></center><div id='153' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 5<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1<br>1 2<br>1 2 3<br>1 2 3 4<br>1 2 3 4 5</font></b></div><center><button id='54' class='buttonclass'>Solution</button></center><div id='154' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 6<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1 2 3 4 5<br>1 2 3 4<br>1 2 3<br>1 2 <br>1 </font></b></div><center><button id='55' class='buttonclass'>Solution</button></center><div id='155' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 7<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>5<br>5 4<br>5 4 3<br>5 4 3 2<br>5 4 3 2 1</font></b></div><center><button id='56' class='buttonclass'>Solution</button></center><div id='156' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 8<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>5 4 3 2 1<br>5 4 3 2<br>5 4 3<br>5 4<br>5</font></b></div><center><button id='57' class='buttonclass'>Solution</button></center><div id='157' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	

<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 9<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1 0 1 0 1<br>1 0 1 0 1<br>1 0 1 0 1<br>1 0 1 0 1<br>1 0 1 0 1</font></b></div><center><button id='58' class='buttonclass'>Solution</button></center><div id='158' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 10<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 16px'><br><br>1<br>1 0 1<br>1 0 1 0 1<br>1 0 1 0 1 0 1<br>1 0 1 0 1 0 1 0 1</font></b></div><center><button id='59' class='buttonclass'>Solution</button></center><div id='159' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>
	
	
<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 11<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 20px'><br><br>*<br>* * *<br>* * * * *<br>* * * * * * *<br>* * * * * * * * *</font></b></div><center><button id='60' class='buttonclass'>Solution</button></center><div id='160' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


<div align='justify' style="margin: 0px; padding: 10px; font-size: 17px; padding-left: 15px"><b>Pattern 12<font style='color: rgb(225,113,0);font-weight:bolder; font-size: 20px'><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* * *<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* * * * *<br>&nbsp;&nbsp;&nbsp;&nbsp;* * * * * * *<br>&nbsp;* * * * * * * * *</font></b></div><center><button id='61' class='buttonclass'>Solution</button></center><div id='161' class='comments' style="overflow: scroll ;max-height: 350px; width: 100%;">
	</div>
	
	<hr color='blue'>


    <br>
	<footer class="footerindex">
		<center><font style='font-size:10px'>&copy;2018 CodeStack All Rights Reserved</font></center>
	</footer>
	

</body>
</html>

