<?php

	include 'config.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>footballmaniac.com</title>
	<link rel="stylesheet" href="footballmaniac.css" type="">
</head>
<body style="background-image: url(ftbl4.jpg);">
	<div>
		<img src="images.jpg" width="100%" height="200px">
		<header>

			<ul id="ul_class">
				<li ><a href="index.php">Home</a></li>
				
				<li ><a href="compitition.html">Competitions</a></li>
				
				<li ><a href="video2.html">Videos</a></li>
			</ul>
		</header>
		
		<article id="rumours">

			<table id="t1">
				<tr><th>Today's Matchs</th></tr>
				<?php
					$sql="SELECT ht,t,at
					FROM schedule
					ORDER BY t ASC";

					$q_result=mysqli_query($conn,$sql) or die(mysql_error());
					if(mysqli_num_rows($q_result)>0)
					{
						while ($row=mysqli_fetch_array($q_result)) {

							 
				?>
					<tr>
						<td>
							<?php echo $row['ht']; ?>
						</td>																		
						<td>
							<?php echo $row['t']; ?>
						</td>
						<td>
							<?php echo $row['at']; ?>
						</td>
					</tr>
					   <?php }
					}


					?>
			</table>
		</article>

	    <footer>

				copyright 
		
		</footer>
	</div>
</body>
</html>