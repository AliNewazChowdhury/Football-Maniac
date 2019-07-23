<?php
	include 'config.php';
?>
<!DOCTYPE html>



<html>
<head>
	<title>footballmaniac.com</title>
	<link rel="stylesheet" href="footballmaniac.css" type="text/css">
	
</head>
<body  style="background-image: url(ftbl4.jpg)">

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
		<nav>
			<ul id="ul_class2">
				<li><a href="schedule.php">Schedule</a></li>
				<li><a href="negotiation.php">Transfer Negotiations</a></li>
				<li><a href="league_results.php">Results</a></li>
			</ul>
		</nav>
		<article >
			<table style="height: 280px;">
				<?php
					$head= isset($_GET['heading']) ? $_GET['heading'] : '';
					$sql="SELECT image,header,article
						FROM news
						WHERE type='news'
						AND header='$head'";

					$q_result=mysqli_query($conn,$sql) or die(mysql_error());
					if(mysqli_num_rows($q_result) > 0)
					{
						while ($row=mysqli_fetch_array($q_result)) {	?>
					        <img width="50%" height="200px" src="<?php echo $row['image']; ?>">

					        <h1><?php echo $row['header']; ?></h1>
					 		<p>
					 		<?php echo $row['article']; ?>
					        </p>
					   <?php }
					}
				?>


					
					
		    </table>

			
			
		</article>
		<table id="results" border="4" cellpadding="2" cellspacing="2">

				<tr>
					<th>Laliga Results</th>
				</tr>
				<?php
					$sql="SELECT home_team,ht_goal,at_goal,away_team FROM laliga_results ORDER BY r_id DESC";

					$q_result=mysqli_query($conn,$sql) or die(mysql_error());
					if(mysqli_num_rows($q_result)>0)
					{
						while ($row=mysqli_fetch_array($q_result)) {	
				?>
								<tr>
									<td>
										<tr>
											<td><?php echo $row['home_team'] ?></td><td><?php echo $row['ht_goal'] ?></td><td><?php echo $row['at_goal'] ?></td><td><?php echo $row['away_team'] ?></td>
										</tr>
									</td>
								</tr>
					   <?php }
					}
					?>
		</table>
		<table id="results" border="4" cellpadding="2" cellspacing="2" bgcolor="white">

				<tr>
					<th>EPL Results</th>
				</tr>
				<?php
					$sql="SELECT home_team,ht_goal,at_goal,away_team FROM epl_results ORDER BY r_no DESC";

					$q_result=mysqli_query($conn,$sql) or die(mysql_error());
					if(mysqli_num_rows($q_result)>0)
					{
						while ($row=mysqli_fetch_array($q_result)) {	
					?>
								<tr>
									<td>
										
										<tr>
											<td><?php echo $row['home_team'] ?></td><td><?php echo $row['ht_goal'] ?></td><td><?php echo $row['at_goal'] ?></td><td><?php echo $row['away_team'] ?></td>
										</tr>
								
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