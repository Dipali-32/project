<?php

	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="student_login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->


<!-- bootstrap 5 links -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 

</head>
<body>
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
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
				<?php
				if(isset($_SESSION['login_user']))
				{
					?>
					<ul class="nav_menu">
						<li><a href="profile.php">PROFILE</a></li>
						</ul>

					<div style="color: white;">
						<?php
									echo "<img class='img-circle profile_img rounded-circle' height=30 width=30 src='images/".$_SESSION['pic']."'>";
									echo " ". $_SESSION['login_user'];
									?>
					</div>
						
					<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><span class= "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
					</ul>

					<?php

				}
				else
				{
					?>
				<ul class="nav navbar-nav navbar-right">

					<li><a href="student_login.php"><span class= "glyphicon glyphicon-log-in">LOGIN</span></a></li>
					<li><a href="registration.php"><span class= "glyphicon glyphicon-user">SIGN UP</span></a></li>
				</ul>

				<?php
				}
				?>
			  
	          </div>
	</nav>

</body>
</html>