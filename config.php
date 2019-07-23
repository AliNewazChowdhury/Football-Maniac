	<?php
		$conn= new  mysqli("localhost","root","","football_maniac2");
		if ($conn->connect_error){
			die("Connection failed: ".mysql_connect_error());
			echo "not connected";
		}
		
	?>