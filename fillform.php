<!DOCTYPE html>
<html>
<head>
			
	<title>Home (Tourism management)</title>
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
					<li><a href="#">Fill form</a></li>
					<li><a href="logout.php">Logout</a></li>					
				</ul>
			</div>
	</div>
	<div id="home">
		<div class="filli">
		<form action="" method="post">
		<table align="center">
			<tr>
				<td><div class="fillin">Choose your date for the travel</div></td>
				<td><input type="date" name="startdate" name="startdate"></td>
			</tr>
			<tr>
				<td><div class="fillin">Choose your type of food</div></td>
				<td><input type="radio" name="food" value="veg" checked >VEG<input type="radio" name="food" value="nonveg">NONVEG</td>
			</tr>
			<tr>
				<td><div class="fillin">Enter the number of persons travelling</div></td>
				<td><input type="number" name="persons" min="1" max="10" name="persons"></td>
			</tr>
			<tr></br></tr>
			<tr></br></tr>
			<tr></br></tr>
			<tr></tr>
			<tr>
				
				<td><a href="payment.php"><button class="but5">Submit</button></a></td>
			</tr></div>
		</table>
	</form>









	</div>
</div>
</body>
</html>
<?php
	include("connection.php");
	if(isset($_POST['persons'])){
	if($a==false){
				die("Connection failed:".mysqli_error($a));
			}
			session_start();
			$new1=$_GET['packageid'];
			$new2=$_SESSION['userid'];
			$sqlnew="SELECT price FROM packages WHERE packageid=".$_GET['packageid']; 
			$result = mysqli_query($a,$sqlnew) or die(mysqli_error($a));
			$pr='0';
			while($row=mysqli_fetch_array($result)){
				$pr="{$row['price']}";
			}

			
			
			

			$sql="INSERT INTO bookings(pack_amount,start_date,food_details,no_of_persons,packageid,userid) values('$pr','$_POST[startdate]','$_POST[food]','$_POST[persons]','$new1','$new2')";
			if(mysqli_query($a,$sql))
			{
				header("LOCATION:payment.php");
			}
			else{
				echo "Error".$sql."<br>".mysqli_error($a);
			} 
			





}




?>