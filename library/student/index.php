<?php

	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Online Library Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css"></style>
<body>
	<nav>
	   <!-- <div class="wrapper"> -->
		 
			<div class="container nav_container">
			    <a href="index.php">
                 <h4>LIBRARY</h4>
                  <h4>MANAGEMENT</h4>
               </a>
               <?php
               if(isset($_SESSION['login_user']))
               {
               	?>
               	<nav>

               	<ul class="nav_menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<!-- <li><a href="registration.php">REGISTRATION</a></li> -->
					<li><a href="feedback.php">FEEDBACK</a></li>

				</ul>
				</nav>
				<?php

               }
               else
               {
               	?>
               	<nav>

               	<ul class="nav_menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li> 
					<li><a href="feedback.php">FEEDBACK</a></li>

				</ul>
				</nav>

               	<?php
               }

				?>


				<!-- <ul class="nav_menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>

				</ul> -->

					  
	          </div>

	          
	</nav>
			
		
		<section>
			<div class="sec_img">
			<br><br><br><br><br><br><br><br>
			<div class="box">
				
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br>
				<h1 style="text-align: center; font-size: 23px;">Opens at: 09:00</h1><br>
				<h1 style="text-align: center; font-size: 23px;">Closes at: 15:00</h1><br>
				<h5 style="color:white;text-align: center;">Contact us through social media</h3><br>
					<div class="icon">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-whatsapp"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-snapchat"></a></div>
					<p style="color:white;text-align: center;">
		<br>
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +880171*******
	</p>

				
			</div>

			</div>
		</section>
		
	</div>
	<?php
	include "footer.php";
	?>
</body>
</html>