<?php
			
			include 'dbhelper.php';	
			$idfetch = $_POST['idfetch'];
			
		
			$sql="select * from programs where id=$idfetch";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo "<b><font style='color:red; font-size:12px; font-family: calibri'><pre>";
					echo $row['solution'];
					echo "</pre></font></b>";	
				}
			}
			else
			{
				//echo "There are no comments";
			}
		?>