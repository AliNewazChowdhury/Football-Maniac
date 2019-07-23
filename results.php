<?php



 	include 'session.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>footballmaniac.com</title>
	<link rel="stylesheet" href="admin.css" type="">
	
</head>
<body style="background-image: url(admin4.jpg)" >

	<div class="div_class">
		<img src="images.jpg" width="100%" height="200px">
		<header>

			
		</header>
		<nav>	
			<table class="tb2">
				<tr>
					<td>
						<a href="add_news.php">Add News</a>
					</td>
				</tr>
			</table>
			<table class="tb2">					
				
				<tr>
					<td>
						<a href="results.php">Match Result</a>
					</td>
				</tr>
			</table>
			<table class="tb2">
				<tr>
					<td>
						<a href="add_pt.php">Point table</a>
					</td>
				</tr>
			</table>
			<table class="tb2">
				<tr>
					<td>
						<a href="transfer_matchs.php">Transfer News and Matches</a>
					</td>
				</tr>
			</table>
						<table class="tb2">
				<tr>
					<td>
						<a href="log-out.php">Log out</a>
					</td>
				</tr>
			</table>
		</nav>
		<article >
			
			<table class="tb1" >
				<tr><th>Laliga Results</th></tr>
				<tr>
					<td>
						<form action="results.php" method="post">
							Home team<input type="text" name="htname">
							Goal<input type="text" name="ht_goal">
							<br>

							Away team<input type="text" name="atname">
							Goal<input type="text" name="at_goal">
							<br>
							<input type="submit" name="league" value="laliga"><br><br>
							 Delete all results
							<input type="submit" name="league" value="Delete">
						</form>
					</td>
				</tr>
			</table>

			<br><br>

			<table class="tb1">
				<tr><th>English Premire League Results</th></tr>
				<tr>
					<td>
						<form action="results.php"
						method="post">
							Home team<input type="text" name="htname">
							Goal<input type="text" name="ht_goal">
							<br>
							Away team<input type="text" name="atname">
							Goal<input type="text" name="at_goal">
							<br>
							<input type="submit" name="league1" value="EPL"><br><br>
							 Delete all results
							<input type="submit" name="league1" value="Delete">
						</form>
					</td>
				</tr>
			</table>
			<br><br>
			<table class="tb1">
				<tr><th>SerieA Results</th></tr>
				<tr>
					<td>
						<form action="results.php" method="post">
							Home team<input type="text" name="htname">
							Goal<input type="text" name="ht_goal">
							<br>
							Away team<input type="text" name="atname">
							Goal<input type="text" name="at_goal">
							<br>
							<input type="submit" name="league2" value="SerieA"><br><br>
							 Delete all results
							<input type="submit" name="league2" value="Delete">
						</form>
					</td>
				</tr>
			</table>
			<br><br>
			<table class="tb1">
				<tr><th>Bundesliga Results</th></tr>
				<tr>
					<td>
						<form action="results.php" method="post">
							Home team<input type="text" name="htname">
							Goal<input type="text" name="ht_goal">
							<br>
							Away team<input type="text" name="atname">
							Goal<input type="text" name="at_goal">
							<br>
							<input type="submit" name="league3" value="Bundesliga"><br><br>
							 Delete all results
							<input type="submit" name="league3" value="Delete">
						</form>
					</td>
				</tr>
			</table>

			<br><br>

		</article>
		
		<footer>

		       copyright 
			
	    </footer>

	</div>

</body>
</html>

<?php

	
	switch ($_POST['league']) {
		case 'laliga':
			if(isset($_POST['htname'])){
				$htname=$_POST['htname'];
			}
			if (isset($_POST['ht_goal'])) {
				$ht_goal=$_POST['ht_goal'];
				
			}
			if (isset($_POST['atname'])) {
				$atname=$_POST['atname'];
			}

			if (isset($_POST['at_goal'])) {
				$at_goal=$_POST['at_goal'];
				
			}
			


			$sql="INSERT INTO laliga_results(home_team,ht_goal,at_goal,away_team) VALUES('$htname',$ht_goal,$at_goal,'$atname')";
			if(!mysqli_query($conn,$sql)){
				echo "Not inserted";
			}
		    else{
		    	echo "Inserted";
		    }

			break;
		case 'Delete':

			$sql2="DELETE FROM laliga_results";

			if(!mysqli_query($conn,$sql2)){
				#echo "Not Deleted";
			}else{
				#echo "Deleted";
			}
			break;
		default:
			break;

		}
		switch ($_POST['league1']) 
		{
			case 'EPL':

				if(isset($_POST['htname'])){
					$htname=$_POST['htname'];
				}
				if (isset($_POST['ht_goal'])) {
					$ht_goal=$_POST['ht_goal'];
					
				}
				if (isset($_POST['atname'])) {
					$atname=$_POST['atname'];
				}

				if (isset($_POST['at_goal'])) {
					$at_goal=$_POST['at_goal'];
					
				}
				


				$sql="INSERT INTO epl_results(home_team,ht_goal,at_goal,away_team) VALUES('$htname',$ht_goal,$at_goal,'$atname')";
				if(!mysqli_query($conn,$sql)){
					echo "Not inserted";
				}
			    else{
			    	echo "Inserted";
			    }
					
				break;
			case 'Delete':

				$sql2="DELETE FROM epl_results";

				if(!mysqli_query($conn,$sql2)){
					#echo "Not Deleted";
				}else{
					#echo "Deleted";
				}
				break;
				
			default:
				
				break;
		}
        switch($_POST['league2'])
        {
			case 'SerieA':
				if(isset($_POST['htname'])){
					$htname=$_POST['htname'];
				}
				if (isset($_POST['ht_goal'])) {
					$ht_goal=$_POST['ht_goal'];
					
				}
				if (isset($_POST['atname'])) {
					$atname=$_POST['atname'];
				}

				if (isset($_POST['at_goal'])) {
					$at_goal=$_POST['at_goal'];
					
				}
				


				$sql="INSERT INTO seriea_results(home_team,ht_goal,at_goal,away_team) VALUES('$htname',$ht_goal,$at_goal,'$atname')";
				if(!mysqli_query($conn,$sql)){
					echo "Not inserted";
				}
			    else{
			    	echo "Inserted";
			    }
				break;
			case 'Delete':

				$sql2="DELETE FROM seriea_results";

				if(!mysqli_query($conn,$sql2)){
					#echo "Not Deleted";
				}else{
					#echo "Deleted";
				}
				break;
			default:
				break;
		}

		switch($_POST['league3'])
        {
			case 'Bundesliga':
				if(isset($_POST['htname'])){
					$htname=$_POST['htname'];
				}
				if (isset($_POST['ht_goal'])) {
					$ht_goal=$_POST['ht_goal'];
					
				}
				if (isset($_POST['atname'])) {
					$atname=$_POST['atname'];
				}

				if (isset($_POST['at_goal'])) {
					$at_goal=$_POST['at_goal'];
					
				}
				


				$sql="INSERT INTO bundesliga_results(home_team,ht_goal,at_goal,away_team) VALUES('$htname',$ht_goal,$at_goal,'$atname')";
				if(!mysqli_query($conn,$sql)){
					echo "Not inserted";
				}
			    else{
			    	echo "Inserted";
			    }
				break;
			case 'Delete':

				$sql2="DELETE FROM bundesliga_results";

				if(!mysqli_query($conn,$sql2)){
					#echo "Not Deleted";
				}else{
					#echo "Deleted";
				}
				break;
			default:
				break;
	    }
?>