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

		<table id="t1" style="width: 100%">
			<th>No</th><th>Name</th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>PTS
				</th>

			<?php
				$sql="SELECT name,mp,win,draw,lose,gf,ga,gd,pts FROM laliga ORDER BY pts DESC ";

				$q_result=mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($q_result) > 0)
				{
					$t_no=0;
				while ($row=mysqli_fetch_array($q_result)) {	?>
				<tr>
	                  <td><?php echo ++$t_no; ?></td>
	                  
	                  <td><?php echo $row['name'];?></td>
	                  <td><?php echo $row['mp'];?></td>
	                  <td><?php echo $row['win']; ?></td>
	                  <td><?php echo $row['draw'];?></td>
	                  <td><?php echo $row['lose'];?></td>
	                  <td><?php echo $row['gf']; ?></td>
	                  <td><?php echo $row['ga']; ?></td>
	                  <td><?php echo $row['gd']; ?></td>
	                  <td><?php echo $row['pts'];?></td>
	             </tr>
		<?php
				}
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
