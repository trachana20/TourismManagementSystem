<?php include("connection.php"); 
			if(isset($_POST['username'])){

			if($a==false){
				die("Connection failed:".mysqli_error($a));
			}
			$sql="INSERT INTO user_details(userid,email) values('$_POST[username]','$_POST[password]')";
		if(mysqli_query($a,$sql))
			{
				echo "new record created sucessfully";
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($a);
			}
		}
			mysqli_close($a);
	
		?>	
<!DOCTYPE html>
<html>
<head>
	<title>Places to visit</title>
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
					<li><a href="home.php">Home</a></li>
					<li><a href="placestovisit.php">Places to visit</a></li>
					<li><a href="offers.php">Offers</a></li>
					<li><a href="contactus.php">Contact us</a></li>
					<li><a href="myaccount.php">My Account</a>
					</li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<div class="main">
			<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="delhi.php"><img src="img/delhi.png"  width=500 height=300><div class="overlay">upto 10% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Delhi</h3>
						<h6>Starting from</h6>
						<h2>₹ 10,295</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="agra.php"><img src="img/Agra.png"  width=500 height=300><div class="overlay">upto 5% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Agra</h3>
						<h6>Starting from</h6>
						<h2>₹ 10,943</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="mysore1.php"><img src="img/Mysore.png"  width=500 height=300><div class="overlay">upto 20% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Mysore</h3>
						<h6>Starting from</h6>
						<h2>₹ 2,876</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="shimla.php"><img src="img/Shimla.png"  width=500 height=300><div class="overlay">upto 25% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Shimla</h3>
						<h6>Starting from</h6>
						<h2>₹ 6,765</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="jaipur.php"><img src="img/jaipur.png"  width=500 height=300><div class="overlay">upto 15% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Jaipur</h3>
						<h6>Starting from</h6>
						<h2>₹ 6,196</h2>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row1">
				<div class="col-mid-3">
					<div class="product-top">
						<a href="gujarat.php"><img src="img/Gujarat.png"  width=500 height=300><div class="overlay">upto 30% off</div></a>
					</div>
					<div class="product-bottom text-center">
						<h3>Gujrat</h3>
						<h6>Starting from</h6>
						<h2>₹ 8,543</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



