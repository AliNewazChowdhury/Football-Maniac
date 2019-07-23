<?php
	include 'config.php';
?>
<!DOCTYPE html>



<html>
<head>
	<title>footballmaniac.com</title>
	<link rel="stylesheet" href="footballmaniac.css" type="">
	
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
		<article id="article">
			<table id="BreakingNews">


				<?php
					$sql="SELECT image,header
					FROM news
					WHERE type='news'
					ORDER BY n_id DESC";

					$q_result=mysqli_query($conn,$sql) or die(mysql_error());
					if(mysqli_num_rows($q_result)>0)
					{
						while ($row=mysqli_fetch_array($q_result)) {

							 $heading=$row['header'];
				?>
								<tr>
									<td>
										<a id="a1"  href="news.php?heading=<?php echo $heading; ?>" onclick="func1">
											<img id="image" src="<?php echo $row['image'];?>">
											<h1><?php echo $row['header']; ?></h1>
										</a>
									</td>
								</tr>
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