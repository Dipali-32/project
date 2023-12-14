<?php

include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="student_login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>

<header>
	<nav>
	   <!-- <div class="wrapper"> -->
		 
			<div class="container nav_container">
			    <a href="index.php">
                 <h4>LIBRARY</h4>
                  <h4>MANAGEMENT</h4>
               </a>
				<ul class="nav_menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<!-- <li><a href="admin.php">LOGIN</a></li> -->
					<li><a href="registration.php">SIGN UP</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			  
	          </div>
	</nav>
	
</header>
<section>
	<div class="log_img">
		<br><br><br><br>
		<div class="box1">
			<br><br>
			<h1 style="text-align: center; font-family: Lucida Console; font-size: 35px;">Library Lanagement System</h1> <br>
			<h1 style="text-align: center; font-family: Lucida Console; font-size: 25px;"text-align: center; font-family: Lucida Console; font-size: 35px;>User Login Form</h1><br><br>
		<form name="login" action="" method="post">
			<div class="login">
			<input type="text" name="username" placeholder="username" required=""> <br><br>
			<input type="password" name="password" placeholder="password" required=""> <br><br>
			<input  class="btn" type="submit" name="submit" value="Submit" style="width: 90px;"><br><br>
			</div>
		</form>
		<p style="padding-left: 15px;">
			<br>
			<a href="update_password.php">Forgot Password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp
			New to this website? <a href="registration.html">Sign Up</a>
		</p>
		
		</div>
	</div>
	
</section>

<?php
	if(isset($_POST['submit']))
	{
		$count=0;
		$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password= '$_POST[password]';");

		$row= mysqli_fetch_assoc($res);

		$count= mysqli_num_rows($res);

		if($count==0)
		{
			?>
			<script type="text/javascript">
				alert("The username and password doesn't match");
			</script>

			<?php

		}
		else
		{

			/*---------------if username and password matches-----------------------------*/
			$_SESSION['login_user']= $_POST['username'];
			$_SESSION['pic']= $row['pic'];

			?>
			<script type="text/javascript">
				window.location= "index.php"
			</script>
			<?php
		}
	}

?>
</body>
</html>