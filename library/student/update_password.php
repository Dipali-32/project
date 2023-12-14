<?php
	include "navbar.php";
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<style type="text/css">
		body
		{
			background-image: url("images/password.png");
		}
		.wrapper
		{
			width: 400px;
			height: 400px;
			margin: 0 auto;
			background-color: black;
			margin-top: 130px;
			opacity: 0.8;
			color: white;
			padding: 20px 20px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h2>Change Your Password</h2>
			
		</div>
		<div style="padding-left: 45px;">
		<form action="" method="post">
			<br><br>
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="password" name="password" class="form-control" placeholder="New Password" required=""><br>
			
			<button style="background-color: white; color: black; margin-left: 100px;"  class="btn btn-default" type="submit" name="submit">Update</button>
		</form></div>
		
	</div>
	
	<?php
			if(isset($_POST['submit']))
			{
				if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]';"))
				{
					?>
						<script type="text/javascript">
							alert("The Password updated successfully!")
						</script>
					<?php
				}
			}
		?>

</body>
</html>