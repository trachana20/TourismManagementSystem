<!DOCTYPE html>
<html>
<head>
	<title>Register (Tourism management)</title>
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
					
				</ul>
			</div>
		</div>
			<div class="rac">
				<form action="" method="post">
				<h1><div class="goafic" >Add Package</div></h1>
				<table align="center">
					<tr>
						<td><h2><div class="colors">Package Id</div></h2></td>
						<td><input type="number" name="pacid" placeholder="Enter Package Id" ></td>

					</tr>
					<tr>
						<td><h2><div class="colors">Package Name</div></h2></td>
						<td><input type="text" name="name" placeholder="Enter Package name" ></td>

					</tr>
					<tr>
						<td><h2><div class="colors">Price</div></h2></td>
						<td><input type="text" name="price" placeholder="Enter Price" ></td>

					</tr>
					<tr>
						<td><h2><div class="colors">Location</div></h2></td>
						<td><input type="text" name="location" placeholder="Enter Location" ></td>

					</tr><tr>
						<td></td>
						<td><a href="home.php"><button class="but1">Submit</button></a></td>
					</tr>
				</table>
				</form>


</div>


			</div>





				<?php include("connection.php"); 
			if(isset($_POST['name'])){

			if($a==false){
				die("Connection failed:".mysqli_error($a));
			}
			$sql="INSERT INTO packages(packageid,packagename,price,location) values('$_POST[pacid]','$_POST[name]','$_POST[price]','$_POST[location]')";
		if(mysqli_query($a,$sql))
			{
				echo'<script>alert("New package added......Please do the front end!!!!"); window.location.href="addpackage.php";</script>';
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($a);
			}
		}
			mysqli_close($a);
	
		?>
			
		</div>
		
	</body>
</html>




