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
					<li><a href="myaccount.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<?php include("connection.php");
			if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					?>
		<div class="back">
			<table align="center" >
				<!-- <tr>
					<td>User Id</td></tr>
				<tr>	<td>Name</td></tr>
				<tr>	<td>UserName</td></tr>
				<tr>	<td>Phone Number</td></tr>
				<tr>	<td>e mail</td></tr>
				<tr>	<td>Address</td></tr> -->
				<tr>
				<h2><div class="myacc">Your Details</div></h2>
				<div class="myaccout">
				<?php
				session_start();
				$sql="SELECT userid,name,username,phno,email,address FROM user_details where userid= ".$_SESSION['userid'];
				$result =mysqli_query($a,$sql);
			
				while($row=mysqli_fetch_array($result)){
				echo
				"<tr><td>User Id:  </td>
					<td> {$row['userid']}</td></tr>
					<tr><td>Name: </td><td>{$row['name']}</td></tr>
					<tr><td>UserName: </td><td>  {$row['username']}</td></tr>
					<tr><td>Phone Number: </td><td>  {$row['phno']}</td></tr>
					<tr><td>e mail: </td><td>  {$row['email']}</td></tr>
					<tr><td>Address:  </td><td> {$row['address']}</td>
				</tr>\n";



				// $ses=$_SESSION['userid'];
				// echo "Bookings";
				// $sql3='CALL dispbooking(1)';
				// $res=mysqli_query($a,$sql3);
				// while($row=mysqli_fetch_array($res)){
				// echo
				// "<tr>
				// <td>Booking Id   {$row['bid']}</td></tr>
				// 	<tr><td>Package Id  {$row['packageid']}</td></tr>
				// 	<tr><td>Package Name   {$row['packagename']}</td></tr>
				// 	<tr><td>Price   {$row['price']}</td></tr>
					
				// </tr>\n";



			}
			?></div>
</table>
<h2><div class="myacc">Your Bookings</div></h2>
<table align="center" style="width:100%">
<tr><div class="myaccin">
					
					<td><div class="myaccin">Package Id</div></td>
					<td><div class="myaccin">Package Name</div></td>
					<td><div class="myaccin">Price</div></td>
					<td><div class="myaccin">Location</div></td>
					<td><div class="myaccin">Booking Id</div></td>
					<td><div class="myaccin">No of Persons</div></td>
					<td><div class="myaccin">Start date</div></td>
					<td><div class="myaccin">Food Details</div></td>
				</tr>
			</div>
<div class="booki">
			<?php include("connection.php");
			
			$sql="select u.userid,u.username,u.email,p.packageid,p.packagename,p.price,p.location,b.bid,b.no_of_persons,b.start_date,b.food_details,t.amount 
			from user_details as u,packages as p,bookings as b,totalamount as t
			where u.userid=b.userid and b.packageid=p.packageid and t.bid=b.bid and b.confirmation='true' and u.userid=".$_SESSION['userid'];
			$res=mysqli_query($a,$sql);
			$rows = mysqli_num_rows($res);
				while($row=mysqli_fetch_array($res)){
				echo
				"
					<tr>
					
					<td>{$row['packageid']}</td>
					<td>{$row['packagename']}</td>
					<td>{$row['price']}</td>
					<td>{$row['location']}</td>
					<td>{$row['bid']}</td>
					<td>{$row['no_of_persons']}</td>
					<td>{$row['start_date']}</td>
					<td>{$row['food_details']}</td>
				
					
					<td><a href='details.php?bid={$row['bid']}'>Cancel</a></td>
					</tr>
					

				\n\n";
			}
			if($rows==0)
			{
				echo"No bookings Yet";
			}

			?>
				

			</table>
		</div>






		</div>

	</div>
</body>
</html>
