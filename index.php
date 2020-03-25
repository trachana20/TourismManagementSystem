<?php 
				session_start();
				require_once("connection.php");
				

				if(isset($_POST['submit']))
				{
					if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					$sql="SELECT * FROM user_details WHERE username ='$_POST[username]' and pass ='$_POST[password]'";
					$result = mysqli_query($a,$sql) or die(mysqli_error($a));
					$rows = mysqli_num_rows($result);
				

        		$sql1="SELECT userid FROM user_details WHERE username='$_POST[username]' and pass='$_POST[password]'";
        		$result1 = mysqli_query($a,$sql1) or die(mysqli_error($a));
        		$row=mysqli_fetch_array($result1);


        		$_SESSION['userid']=$row['userid'];
        		// header("LOCATION:myaccount.php");

        		//setcookie("userid",$row['userid'],time()+5);
        		//header("LOCATION:myaccount.php?success=".$result1);
        		if($rows==1)
        		{
        			// echo"<div class=\"bg-modal\">";
        			// echo"<div class=\"modal-content\">";
        			header("LOCATION:home.php");
        			// echo"logged in successfully";
        			// echo"</br>";
        			// echo"<a href='home.php'>home</a>";
        			// echo"</div";
        			// echo"</div";
        			

        			// $sql2="CREATE PROCEDURE userparse
        			// as
        			// SELECT userid FROM user_details WHERE WHERE username ='$_POST[username]' and pass ='$_POST[password]'
        			// GO;";

        		}
        		else{
        			echo'<script>alert("Invalid Credentials"); window.location.href="index.php";</script>';
        		}


        		
        	}
		
			mysqli_close($a);
?><!DOCTYPE html>
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
					<li><a href="home.php">Home</a></li>
					<li><a href="placestovisit.php">Places to visit</a></li>
					<li><a href="offers.php">Offers</a></li>
					<li><a href="contactus.php">Contact us</a></li>
					<li><a href="myaccount.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="home">
			<img src="img/homepage2.png" width="1520" height="550" >
			<div id="homecontent">
				<div class="row">
					<div class="column">
					<h1>About Tourism</h1>
				<p><div class="home1">Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.[2] The World Tourism Organization defines tourism more generally, in terms which go "beyond the common perception of tourism as being limited to holiday activity only", as people "traveling to and staying in places outside their usual environment for not more than one consecutive year for leisure and not less than 24 hours, business and other purposes".[3]

Tourism can be domestic (within the traveller's own country) or international, and international tourism has both incoming and outgoing implications on a country's balance of payments.

Tourism numbers declined as a result of a strong economic slowdown (the late-2000s recession) between the second half of 2008 and the end of 2009, and in consequence of the outbreak of the 2009 H1N1 influenza virus,[4][5] but slowly recovered. Globally, international tourism receipts (the travel item in balance of payments) grew to US$1.03 trillion (€740 billion) in 2005, corresponding to an increase in real terms of 3.8% from 2010.[6] International tourist arrivals surpassed the milestone of 1 billion tourists globally for the first time in 2012,[7] emerging source markets such as China, Russia, and Brazil had significantly increased their spending over the previous decade.[8] The ITB Berlin is the world's leading tourism trade-fair.[9][better source needed] Global tourism accounts for c. 8% of global greenhouse-gas emissions.[10]</div>
				</p>
				</div>
				<div class="column">
					<h1>Significance of tourism</h1>
					<p><div class="home1">The tourism industry, as part of the service sector,[14] has become an important source of income for many regions and even for entire countries. The Manila Declaration on World Tourism of 1980 recognized its importance as "an activity essential to the life of nations because of its direct effects on the social, cultural, educational, and economic sectors of national societies, and on their international relations."[3][15]

Tourism brings large amounts of income into a local economy in the form of payment for goods and services needed by tourists, accounting as of 2011 for 30% of the world's trade in services, and, as an invisible export, for 6% of overall exports of goods and services.[6] It also generates opportunities for employment in the service sector of the economy associated with tourism.[16]

The hospitality industries which benefit from tourism include transportation services (such as airlines, cruise ships, trains and taxicabs); lodging (including hotels, hostels, homestays, resorts and renting rooms); and entertainment venues (such as amusement parks, restaurants, casinos, shopping malls, music venues, and theatres). This is in addition to goods bought by tourists, including souvenirs.

On the flip-side, tourism can degrade people[17] and sour relationships between host and guest.[18]</div></p>
				</div> </div>
			</div>
			</div>
		<div class="bg-modal">
			<div class="modal-content">

				<img src="img/account.png" alt="" width="75" height="75">
				<div class="close">+</div>
				<form action="" method="post">
					
					<input type="text" placeholder="User Name" name="username">
					<input type="password" placeholder="Password" name="password">
					<a href="home.php"><input type="submit" name="submit" value="login"></a>
					
					<button><a href="register.php">Register</a></button>
				</form>
				



			</div>


		</div>
		
	
		

	</div>
</body>
</html>
