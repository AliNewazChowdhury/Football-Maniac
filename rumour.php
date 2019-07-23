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
				<li ><a href="rumour.php">Rumours</a></li>
				<li ><a href="compitition.html">Competitions</a></li>
				<li ><a href="video2.html">Videos</a></li>
			</ul>
		</header>
		

		<table id="r1" bgcolor="white" style="width: 100%;">

			<?php
				$sql="SELECT image,article
				FROM news
				WHERE type='rumor'";

				$q_result=mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($q_result)>0)
				{
					while ($row=mysqli_fetch_array($q_result)) {	?>
						<tr>
							<td>
						        <img src="<?php echo $row['image']; ?>">
						 		<p>
						 		<?php echo $row['article']; ?>
						        </p>
					        </td>
				        </tr>
				   <?php }
				}
			?>							
		</table>
	
	    <footer>

				copyright 
		
		</footer>

	</div>
</body>
</html>