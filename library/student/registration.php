<?php

include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
					<li><a href="student_login.php">STUDENT-LOGIN</a></li> 
					<!-- <li><a href="registration.php">REGISTRATION</a></li> -->
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			  
	          </div>
	</nav>
	
</header>
<section>
	<div class="reg_img">
		<br><br><br><br><br><br><br><br>
		<div class="box2">
			<br>
			 
			<h1 style="text-align: center; font-family: Lucida Console; font-size: 25px;"text-align: center; font-family: Lucida Console; font-size: 35px;>User Registration Form</h1><br><br>
		<form name="Registration" action="" method="post">
			<div class="login">
			<input type="text" name="first" placeholder="First Name" required=""> <br><br>
			<input type="text" name="last" placeholder="Last Name" required=""> <br><br>
			<input type="text" name="username" placeholder="username" required=""> <br><br>
			<input type="password" name="password" placeholder="password" required=""> <br><br>
			<input type="text" name="email" placeholder="Email" required=""> <br><br>
			<input type="text" name="mobile" placeholder="Mobile No." required=""> <br><br>
			<input class="btn " type="submit" name="submit" value="Sign Up" style="width: 70px;"><br><br>
			</div>
		</form>
		
		
		</div>
	</div>
	
</section>

	<?php
		if(isset($_POST['submit']))
		{
			$count=0;
			$sql="SELECT username from student";
			$res= mysqli_query($db,$sql);

			while($row=mysqli_fetch_assoc($res))
			{
				if($row['username']==$_POST['username'])
				{
					$count=$count+1;
				}
			}
			if($count==0)
			{
				mysqli_query($db,"INSERT INTO `student` VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[mobile]', 'user.png');");

	?>
		<script type="text/javascript">
				alert("Registration Successful!");
			</script>
	<?php
}	

	else
	{
		?>
		<script type="text/javascript">
				alert("Username already exist.");
			</script>
	<?php
	}

	}
	

	?>
</body>