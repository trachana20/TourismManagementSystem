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
			<h1><div class="adhom">Users bookings</div></h1>

			<?php include("connection.php");
			if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					?>
			<table border="1" align="center">
				<tr>
					<td><div class="myaccin1">Booking Id</div></td>
					<td><div class="myaccin1">Package amount</div></td>
					<td><div class="myaccin1">Number of persons</div></td>
					<td><div class="myaccin1">Start date</div></td>
					<td><div class="myaccin1">Food details</div></td>
					<td><div class="myaccin1">Registration date</div></td>
					<td><div class="myaccin1">Package Id</div></td>
					<td><div class="myaccin1">User Id</div></td>
				</tr>
			<?php
			$sql="SELECT * FROM bookings where confirmation='true'";
			$result =mysqli_query($a,$sql);
			
			while($row=mysqli_fetch_array($result)){
			echo
			"<tr>
				<td>{$row['bid']}</td>
				<td>{$row['pack_amount']}</td>
				<td>{$row['no_of_persons']}</td>
				<td>{$row['start_date']}</td>
				<td>{$row['food_details']}</td>
				<td>{$row['reg_date']}</td>
				<td>{$row['packageid']}</td>
				<td>{$row['userid']}</td>
			</tr>\n";
		}
		?>
	</table>

		</div>
	</div>
</body>
</html>