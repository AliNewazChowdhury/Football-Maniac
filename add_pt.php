<?php

	include 'session.php';	

?>
<!DOCTYPE html>
<html>
<head>
	<title>footballmaniac.com</title>
	<link rel="stylesheet" href="admin.css" type="">
	<style type="text/css">
		.container {
		
        width: 500px;
        clear: both;
    	}
	    .container input {
	        width: 100%;
	        clear: both;
	    }
	</style>
	
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
		<table class="tb1" bgcolor="green">
		<tr>
			<td>
				<form class="container" action="add_pt.php" method="post"  >

					name:
					<input type="text" name="name">
					<br><br>

					mp:
					<input type="text" name="mp">
					<br><br>

					win:
					<input type="text" name="win">
					<br><br>

					draw:
					<input type="text" name="d">
					<br><br>

					loss:
					<input type="text" name="l">
					<br><br>

					gf:
					<input type="text" name="gf">
					<br><br>

					ga:
					<input type="text" name="ga">
					<br><br>

					gd:
					<input type="text" name="gd">
					<br><br>

					pts:
					<input type="text" name="pts">
					<br><br>

					<input type="submit" name="league" value="Laliga">

					<input type="submit" name="league" value="EPL">

					<input type="submit" name="league" value="SerieA">

					<input type="submit" name="league" value="Bundesliga">		

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



<?php

	switch($_POST['league']){
		case 'Laliga':
			if (isset($_POST['name'])) {
				$name=$_POST['name'];
			}
			if (isset($_POST['mp'])) {
				$mp=$_POST['mp'];
			}
			if (isset($_POST['win'])) {
				$win=$_POST['win'];
			}
			if (isset($_POST['d'])) {
				$d=$_POST['d'];
			}
			if (isset($_POST['l'])) {
				$l=$_POST['l'];
			}
			if (isset($_POST['gf'])) {
				$gf=$_POST['gf'];
			}
			if (isset($_POST['ga'])) {
				$ga=$_POST['ga'];
			}
			if (isset($_POST['gd'])) {
				$gd=$_POST['gd'];
			}
			if (isset($_POST['pts'])) {
				$pts=$_POST['pts'];
			}



			$sql ="INSERT INTO laliga(name,mp,win,draw,lose,gf,ga,gd,pts) VALUES ('$name', $mp, $win, $d, $l, $gf, $ga , $gd , $pts)";
	        



			if(!mysqli_query($conn,$sql)){
				#echo "Not inserted";
			}
		    else{
		    	#echo "Inserted";
		    }
			break;
		case 'EPL':
			if (isset($_POST['name'])) {
				$name=$_POST['name'];
			}
			if (isset($_POST['mp'])) {
				$mp=$_POST['mp'];
			}
			if (isset($_POST['win'])) {
				$win=$_POST['win'];
			}
			if (isset($_POST['d'])) {
				$d=$_POST['d'];
			}
			if (isset($_POST['l'])) {
				$l=$_POST['l'];
			}
			if (isset($_POST['gf'])) {
				$gf=$_POST['gf'];
			}
			if (isset($_POST['ga'])) {
				$ga=$_POST['ga'];
			}
			if (isset($_POST['gd'])) {
				$gd=$_POST['gd'];
			}
			if (isset($_POST['pts'])) {
				$pts=$_POST['pts'];
			}



			$sql ="INSERT INTO epl(name,mp,win,draw,lose,gf,ga,gd,pts) VALUES ('$name', $mp, $win, $d, $l, $gf, $ga , $gd , $pts)";
	        



			if(!mysqli_query($conn,$sql)){
				#echo "Not inserted";
			}
		    else{
		    	#echo "Inserted";
		    }
			break;
		case 'SerieA':
			if (isset($_POST['name'])) {
				$name=$_POST['name'];
			}
			if (isset($_POST['mp'])) {
				$mp=$_POST['mp'];
			}
			if (isset($_POST['win'])) {
				$win=$_POST['win'];
			}
			if (isset($_POST['d'])) {
				$d=$_POST['d'];
			}
			if (isset($_POST['l'])) {
				$l=$_POST['l'];
			}
			if (isset($_POST['gf'])) {
				$gf=$_POST['gf'];
			}
			if (isset($_POST['ga'])) {
				$ga=$_POST['ga'];
			}
			if (isset($_POST['gd'])) {
				$gd=$_POST['gd'];
			}
			if (isset($_POST['pts'])) {
				$pts=$_POST['pts'];
			}



			$sql ="INSERT INTO seriea(name,mp,win,draw,lose,gf,ga,gd,pts) VALUES ('$name', $mp, $win, $d, $l, $gf, $ga , $gd , $pts)";
	        



			if(!mysqli_query($conn,$sql)){
				#echo "Not inserted";
			}
		    else{
		    	#echo "Inserted";
		    }
			break;
		case 'Bundesliga':
			if (isset($_POST['name'])) {
				$name=$_POST['name'];
			}
			if (isset($_POST['mp'])) {
				$mp=$_POST['mp'];
			}
			if (isset($_POST['win'])) {
				$win=$_POST['win'];
			}
			if (isset($_POST['d'])) {
				$d=$_POST['d'];
			}
			if (isset($_POST['l'])) {
				$l=$_POST['l'];
			}
			if (isset($_POST['gf'])) {
				$gf=$_POST['gf'];
			}
			if (isset($_POST['ga'])) {
				$ga=$_POST['ga'];
			}
			if (isset($_POST['gd'])) {
				$gd=$_POST['gd'];
			}
			if (isset($_POST['pts'])) {
				$pts=$_POST['pts'];
			}



			$sql ="INSERT INTO bund(name,mp,win,draw,lose,gf,ga,gd,pts) VALUES ('$name', $mp, $win, $d, $l, $gf, $ga , $gd , $pts)";
	        



			if(!mysqli_query($conn,$sql)){
				#echo "Not inserted";
			}
		    else{
		    	#echo "Inserted";
		    }
			break;
		default:
			break;
	}



?>