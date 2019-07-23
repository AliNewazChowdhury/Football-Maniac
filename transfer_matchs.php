<?php

	include 'session.php';
	switch ($_POST['tn']) {
		case 'Insert':
			if(isset($_POST['name'])){
		    	$p_name = $_POST['name'];
		    }

		    if(isset($_POST['from'])){
		    	$from=$_POST['from'];
		    }
		    if(isset($_POST['to'])){
		    	$to=$_POST['to'];
		    }
		    if(isset($_POST['tn_type'])){
		    	$type=$_POST['tn_type'];
		    }

	    	$sql="INSERT INTO `transfer_news`( `name`, `from`, `to`, `type`) VALUES ('$p_name','$from','$to','$type')";
	    	
	    	if(!mysqli_query($conn,$sql)){
	    		#echo "Not inserted";
	    	}else{
	    		#echo "Inserted";
	    	}

			break;
		default:
			break;
	}
	switch($_POST['add']){
		case 'Add':

			if (isset($_POST['at'])){
				$at=$_POST['at'];
			}
			if (isset($_POST['t'])){
				$t=$_POST['t'];
			}
			if (isset($_POST['ht'])){
				$ht=$_POST['ht'];
			}


			$sql="INSERT INTO schedule (ht,t,at) VALUES('$ht','$t','$at')";
			if (!mysqli_query($conn,$sql)) {
				#echo "Not inserted";
			}
			else{
				#echo "Inserted";
			}
			break;
		case 'Delete':

			$sql2="DELETE FROM schedule";

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
			<table class="tb1">
				<tr>
					<th>
						Transfer News
					</th>
				</tr>
				<tr>
					<td>
						<form action="transfer_matchs.php"
						method="post">	
							<input type="text" name="name" placeholder="Player name">


							<input type="text" name="from" placeholder="From">

							<input type="text" name="to" placeholder="To">

							
							<input type="text" name="tn_type" placeholder="Type">
							
							<input type="submit" name="tn" value="Insert">
						</form>
					</td>
				</tr>
			</table>
			<br><br>
			<table class="tb1">
				<tr>
					<th>
						Matchs
					</th>
				</tr>
				<tr>
					<td>
						<form action="transfer_matchs.php"
						method="post">

							
							<input type="text" name="ht" placeholder="Home team">
							<input type="time" name="t" placeholder="Time">

							<input type="text" name="at" placeholder="Away team">
			
							<input type="submit" name="add" value="Add">
							<br>
							Delete all matchs
							<input type="submit" name="add" value="Delete">
						</form>
					</td>
				</tr>
			</table>

		</article>
		
		<footer>

		       copyright 
			
	    </footer>

	</div>

</body>
</html>

