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
						<a href="log-out.php">log out</a>
					</td>
				</tr>
			</table>
		</nav>
		<article >
		<table class="tb1" bgcolor="green">
		<tr>
			<td>
				<form class="container" action="" method="post">

				Heading:
				<input type="text" name="heading">
				<br><br>
				Article:
			   <textarea wrap="virtual" rows="10" cols="80" name="news" placeholder="Enter article" >
				</textarea>
				<br><br> 
				Type:
				<input type="text" name="type" placeholder="Type" >
				<br><br>

				Image Name:
				<input type="text" name="image" placeholder="Image name">
				<br><br>


				<input type="submit" value="Insert" name="insert"><br><br>
		

			
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

	switch($_POST['insert']){
		case 'Insert':

			if (isset($_POST['heading'])) {
				$header=$_POST['heading'];
			}

			if(isset($_POST['image'])){
				$image=$_POST['image'];
				
			}

			$m="image/";
			$path=$m.$image;

			if (isset($_POST['news'])) {
			    $news = $_POST['news'];
			}

			if (isset($_POST['type'])) {
			    $type = $_POST['type'];
			}

			$sql ="INSERT INTO news(image,header,article,type) VALUES ('$path','$header','$news','$type')";
	        



			if(!mysqli_query($conn,$sql)){
				echo "Not inserted";
			}
		    else{
		    	echo "Inserted";
		    }
			break;
		default:
			break;
	}


    if(isset($_POST['delete'])){

    	$no = $_POST['n_no'];

    	$sql="DELETE FROM news WHERE n_id = $no";

    	if(!mysqli_query($con,$sql)){
    		#echo "Not deleted";
    	}else{
    		#echo "Deleted";
    	}
    }

?>