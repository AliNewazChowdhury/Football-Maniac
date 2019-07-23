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
		
		<article id="rumours">
		<table  border="4" cellpadding="2" cellspacing="2" style="width: 100%">

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
		
		<table  border="4" cellpadding="2" cellspacing="2" bgcolor="white" style="width: 100%">

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
		<table  border="4" cellpadding="2" cellspacing="2" bgcolor="white" style="width: 100%">

				<tr>
					<th>Bundesliga Results</th>
				</tr>
				<?php
					$sql="SELECT home_team,ht_goal,at_goal,away_team FROM bundesliga_results ORDER BY r_no DESC";

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
		<table  border="4" cellpadding="2" cellspacing="2" bgcolor="white" style="width: 100%">

				<tr>
					<th>SerieA Results</th>
				</tr>
				<?php
					$sql="SELECT home_team,ht_goal,at_goal,away_team FROM seriea_results ORDER BY r_no DESC";

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
		</article>
		    <footer>

					copyright 
			
			</footer>
			
			
		</article>

	</div>
</body>
</html>				
