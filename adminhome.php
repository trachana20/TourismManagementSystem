<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">		
		<div id="header">			
			<div id="logo">
				<img src="img/travelites.png" width=300 height=150>
			</div>
			<div id="nav">
				<ul>
					<li><a href="adminhome.php">Home</a></li>
					<li><a href="adminpackages.php">Packages</a></li>
					<li><a href="adminbookings.php">Bookings</a></li>
					<li><a href="adminlogout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="adminhome1">
			<h1><div class="adhom">Registered users</div></h1>

			<?php include("connection.php");
			if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					?>
			<table border="1" align="center">
				<tr>
					<td><div class="myaccin1">USERID</div></td>
					<td><div class="myaccin1">NAME</div></td>
					<td><div class="myaccin1">USERNAME</div></td>
					<td><div class="myaccin1">PHNO</div></td>
					<td><div class="myaccin1">EMAIL</div></td>
					<td><div class="myaccin1">ADDRESS</div></td>
				</tr>
			<?php
			$sql="SELECT * FROM user_details";
			$result =mysqli_query($a,$sql);
			
			while($row=mysqli_fetch_array($result)){
			echo
			"<tr>
				<td>{$row['userid']}</td>
				<td>{$row['name']}</td>
				<td>{$row['username']}</td>
				<td>{$row['phno']}</td>
				<td>{$row['email']}</td>
				<td>{$row['address']}</td>
				
			</tr>\n";
		}
		?>
	</table>

		</div>
	</div>
</body>
</html>