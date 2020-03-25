<!-- <?php
		include("connection.php");

			if(isset($_POST['food'])){
			echo"enter";

			if($a==false){
				die("Connection failed:".mysqli_error($a));
			}
			 
			$sql3="INSERT INTO bookings(no_of_persons) values('$POST[persons]')";
				
			if(mysqli_query($a,$sql3))
			{
				echo "new record created sucessfully";
			}
			else{
				echo "Error".$sql3."<br>".mysqli_error($a);
			}

			
	
			
		}
?> -->
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
					<li><a href="#">PAYMENT</a></li>
					<li><a href="logout.php">Logout</a></li>					
				</ul>
			</div>
	</div>
	<div id="home"><div class="payback">
		<div class="pay">

			<table align="center">

		<?php include("connection.php");
			session_start();
			$sql="select u.userid,u.username,u.email,p.packageid,p.packagename,p.price,p.location,b.bid,b.no_of_persons,b.start_date,b.food_details,t.amount 
			from user_details as u,packages as p,bookings as b,totalamount as t
			where u.userid=b.userid and b.packageid=p.packageid and t.bid=b.bid and b.bid=(select max(bid) from bookings)
			and u.userid=".$_SESSION['userid'];
			$res=mysqli_query($a,$sql);
			
				while($row=mysqli_fetch_array($res)){
				echo
				"
					<tr><td>User Id </td><td>   {$row['userid']}</td></tr>
					<tr><td>Name  </td><td> {$row['username']}</td></tr>
					<tr><td>email  </td><td> {$row['email']}</td></tr>
					<tr><td>Packageid </td><td>  {$row['packageid']}</td></tr>
					<tr><td>Package Name     </td><td>  {$row['packagename']}</td></tr>
					<tr><td>Price  </td><td> {$row['price']}</td></tr>
					<tr><td>Location </td><td>  {$row['location']}</td></tr>
					<tr><td>Booking Id </td><td>  {$row['bid']}</td></tr>
					<tr><td>No of persons </td><td>  {$row['no_of_persons']}</td></tr>
					<tr><td>Start date  </td>><td> {$row['start_date']}</td></tr>
					<tr><td>Food details </td><td>  {$row['food_details']}</td></tr>
					<tr><td>Total amount </td><td> {$row['amount']}</td></tr>
				";
			}

?></div></table>
		<form action="" method="post">
		<tr><input type="submit" name="submit" value="Click to Pay"/></td></tr>
	</form></div>

	

<?php
	include("connection.php");
	if(isset($_POST['submit'])){
	
	
	$sqlnew="SELECT max(bid) from bookings"; 
			$result = mysqli_query($a,$sqlnew) or die(mysqli_error($a));
			$bid1='0';
			while($row=mysqli_fetch_array($result)){
				$bid1="{$row['max(bid)']}";
			}





	$sql="CALL conf('$bid1');";

	if(mysqli_query($a,$sql))
	{
		echo"booking Confirmed";
		echo'<script>alert("your booking confirmed"); window.location.href="home.php";</script>';
		

	}
	
	else
	{
		echo "Error".$sql."<br>".mysqli_error($a);
	}
}



?>



	</div>
</div>
</body>
</html>