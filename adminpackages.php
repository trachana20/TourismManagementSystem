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
			</div></div>
			<div class="adminhome1">
			<h1><div class="adhom">Packages</div></h1>
			<?php include("connection.php");
			if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					?>
					<table border="1" align="center" width="60%">
				<tr>
					<td><div class="myaccin1">Package Id</div></td>
					<td><div class="myaccin1">Package Name</div></td>
					<td><div class="myaccin1">Price</div></td>
					<td><div class="myaccin1">Location</div></td>
					
				</tr>
				<?php
				$sql="SELECT * FROM packages";
			$result =mysqli_query($a,$sql);
			
			while($row=mysqli_fetch_array($result)){
			echo
			"<tr>
				<td>{$row['packageid']}</td>
				<td>{$row['packagename']}</td>
				<td>{$row['price']}</td>
				<td>{$row['location']}</td>
				<td><a href='cancelpackage.php?packageid={$row['packageid']}'>Cancel</a></td>

			</tr>\n";
		}
		?>
	</table>
	<div class="adpac"><a href='addpackage.php'>Add package</a></div>
	<div><br><br></div>








		</div>
	</div>

</body>
</html>
		