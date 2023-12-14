<?php

	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books</title>
	<link rel="stylesheet" type="text/css" href="books.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 


</head>

<style type="text/css">
	.srch
	{
		
		width: 170px;
		margin: 130px 1300px;
		position: fixed;
		align-content: right;
		position: absolute;
		top: 0;
		right: 0;
		left: 0;

	}
	.btn
	{
		font-size: 10px;
		display: inline-flex;
		padding-top: 9px;
	}
	.navbar-form{
		display: flex;
		gap: 5px;
	}

	body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #4c4c4c;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  margin-top: 10px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
	<header>
	<!-- <nav>
	
			<div class="container nav_container">
			    <a href="index.php">
                 <h4>LIBRARY</h4>
                  <h4>MANAGEMENT</h4>
               </a>
				<ul class="nav_menu">
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="student.php">STUDENT-INFO</a></li ></ul>
					<li><a href="logout.php"><span class= "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
				</ul>
				
			  
	          </div> 
	</nav> -->
	</header>
	<br><br><br><br><br><br>

	<!-- ---------------------------side nav----------------------------- -->

	<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="profile.php">Profile</a>
  <a href="books.php">Books</a>
  <a href="#">Book Request</a>
  <a href="#">Contact</a>
</div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
	<!--    ----------------Search Bar __________________-->
	<div class="srch">
		<form  class="navbar-form" method="post" name="form1">
			
		<input  class= "form-control" type="text" name="search" placeholder="search books.." required="	" >
		<button style= "background-color:#6db6b9e6;" type="submit" name="submit" class="btn btn-default"><i class='bx bx-search-alt-2'></i>
			
			
		</button>
		
	</form>
	</div>
	
	<br><br><br><br><br><br><br>

	<h2 style="text-align: center;">List of Books</h2><br><br>
	<?php

	if(isset($_POST['submit']))
	{
		$q=mysqli_query($db,"SELECT * FROM books where name like '%$_POST[search]%'");
		if(mysqli_num_rows($q)==0)
		{
			echo "Sorry No book found. Try searching again.";
		}
		else
		{
			echo "<table class='table table-bordered table-hover table-light'>";
			echo "<tr class='table-dark' style='background-color: white; '>";
			//table header
				echo "<th>"; echo "ID"; echo "</th>";
				echo "<th>"; echo "Book-Name"; echo "</th>";
				echo "<th>"; echo "Authors Name"; echo "</th>";
				echo "<th>"; echo "Edition"; echo "</th>";
				echo "<th>"; echo "Status"; echo "</th>";
				echo "<th>"; echo "Quantity"; echo "</th>";
				echo "<th>"; echo "Department"; echo "</th>";
				echo "</tr>";

				while($row= mysqli_fetch_assoc($q))
				{
					echo "<tr>";
					echo "<td>";  echo $row['Sr. No'];  echo "</td>";
					echo "<td>";  echo $row['name'];  echo "</td>";
					echo "<td>";  echo $row['authors'];  echo "</td>";
					echo "<td>";  echo $row['edition'];  echo "</td>";
					echo "<td>";  echo $row['status'];  echo "</td>";
					echo "<td>";  echo $row['quantity'];  echo "</td>";
					echo "<td>";  echo $row['department'];  echo "</td>";
					echo "</tr>";

				}
		echo "</table>";

		}
	}

		/*if button is not pressed*/
	else
	{
		$res=mysqli_query($db,"SELECT * FROM books ;");
	
			echo "<table class='table table-bordered table-hover table-light'>";
			echo "<tr class='table-dark' style='background-color: white; '>";
			//table header
				echo "<th>"; echo "ID"; echo "</th>";
				echo "<th>"; echo "Book-Name"; echo "</th>";
				echo "<th>"; echo "Authors Name"; echo "</th>";
				echo "<th>"; echo "Edition"; echo "</th>";
				echo "<th>"; echo "Status"; echo "</th>";
				echo "<th>"; echo "Quantity"; echo "</th>";
				echo "<th>"; echo "Department"; echo "</th>";
				echo "</tr>";

				while($row= mysqli_fetch_assoc($res))
				{
					echo "<tr>";
					echo "<td>";  echo $row['Sr. No'];  echo "</td>";
					echo "<td>";  echo $row['name'];  echo "</td>";
					echo "<td>";  echo $row['authors'];  echo "</td>";
					echo "<td>";  echo $row['edition'];  echo "</td>";
					echo "<td>";  echo $row['status'];  echo "</td>";
					echo "<td>";  echo $row['quantity'];  echo "</td>";
					echo "<td>";  echo $row['department'];  echo "</td>";
					echo "</tr>";

				}
		echo "</table>";

	}


		/*$res=mysqli_query($db,"SELECT * FROM books ;");
	
			echo "<table class='table table-bordered table-hover table-light'>";
			echo "<tr class='table-dark' style='background-color: white; '>";
			//table header
				echo "<th>"; echo "ID"; echo "</th>";
				echo "<th>"; echo "Book-Name"; echo "</th>";
				echo "<th>"; echo "Authors Name"; echo "</th>";
				echo "<th>"; echo "Edition"; echo "</th>";
				echo "<th>"; echo "Status"; echo "</th>";
				echo "<th>"; echo "Quantity"; echo "</th>";
				echo "<th>"; echo "Department"; echo "</th>";
				echo "</tr>";

				while($row= mysqli_fetch_assoc($res))
				{
					echo "<tr>";
					echo "<td>";  echo $row['Sr. No'];  echo "</td>";
					echo "<td>";  echo $row['name'];  echo "</td>";
					echo "<td>";  echo $row['authors'];  echo "</td>";
					echo "<td>";  echo $row['edition'];  echo "</td>";
					echo "<td>";  echo $row['status'];  echo "</td>";
					echo "<td>";  echo $row['quantity'];  echo "</td>";
					echo "<td>";  echo $row['department'];  echo "</td>";
					echo "</tr>";

				}
		echo "</table>";
*/
	?>

</div>
</body>
</html>