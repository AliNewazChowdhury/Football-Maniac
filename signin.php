<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' AND passward = '$mypassword'";
      $result = mysqli_query($conn,$sql) or die(mysql_error());
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: add_news.php");
      }else {
         $error="Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body style="background-image: url(admin3.jpg)">


	

	<form class="form_class" action="" method="post">
	  <div class="aa">


	  	<h1>log in</h1>
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>
	    <br><br>
	    <label><b>Password</b></label>

	    <input type="password" placeholder="Enter Password" name="psw" required>
	    <br><br>

	    <input type="submit" value="Submit">

	 
	  </div>

	    </form>

</body>
</html>

