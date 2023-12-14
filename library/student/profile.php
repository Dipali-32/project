<?php
	include "navbar.php";
	include "connection.php";		
?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile</title>

	</head>
	<style type="text/css">
		.d
		{
			width: 500px;
			margin: 0 auto;
			
			height: 500px;
			margin-top: 150px;
		}
		.user
		{
			width: -100px;
			hei
		}
	</style>
	 

	
	<body   style="background-image: url('images/p.jpg')"
	 >
		<div class="container">
			<form action="" method="post">
				<input class="btn btn-default" type="submit" name="submit" value="Edit" style="width: 100px; height: 35px; color:black; background-color: white; float: right; margin-top: -20px;">	
				
			</form>
			<div class="d">
				<?php

					$q=mysqli_query($db,"SELECT * FROM student WHERE username='$_SESSION[login_user]';");
				?>
				<h2 style="text-align: center;">
					MY PROFILE
				</h2>

				<?php
				$row=mysqli_fetch_assoc($q);
				echo "<div  style='text-align:center'><img class='rounded-circle profile-img' src='images/" . $_SESSION['pic'] . "' width='120' height='120'></div>";

				?>
				<div style="text-align:center;"><b>Welcome</b>
					<h4>
						<?php
							echo $_SESSION['login_user'];
						?>

					</h4>
				</div>

				<?php
				echo "<b>";
				echo "<table class='table table-bordered' style='background-color: transparent;'>";
					echo "<tr>";
						echo "<td style='background-color: transparent;'>";			
							echo "<b>First Name :  </b>";
						echo "</td>";
						echo "<td style='background-color: transparent;'>";
							echo $row['first'];
						echo "</td>";


					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Last Name :</b>";
						echo "</td>";
						echo "<td>";
							echo $row['last'];
						echo "</td>";
					echo "</tr>";


					echo "<tr>";
						echo "<td>";
							echo "<b>Username :</b>";
						echo "</td>";
						echo "<td>";
							echo $row['username'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Password :</b>";
						echo "</td>";
						echo "<td>";
							echo $row['password'];
						echo "</td>";
					echo "</tr>";



					echo "<tr>";
						echo "<td>";
							echo "<b>Mobile No. : </b>";
						echo "</td>";
						echo "<td>";
							echo $row['mobile'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Email:</b>";
						echo "</td>";
						echo "<td>";
							echo $row['email'];
						echo "</td>";
					echo "</tr>";

					



				echo "</table>";
				echo "</b>";
				?>
			
		</div>
			
			
		</div >
		
		
	
	</body>
	</html>