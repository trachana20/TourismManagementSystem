<!DOCTYPE html>
<html>
<head>
	<title>Register (Tourism management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">	
		
			<div id="logcen">
			<img src="img/travelites.png"  width=300 height=150></div>
			<div class="rac">
				<form action="" method="post">
				<h1><div class="goafic" >Registration</div></h1>
				<table>
					<tr>
						<td><h2><div class="colors">Name</div></h2></td>
						<td><input type="text" name="name" placeholder="Enter Name" name="name"></td>

					</tr>
					<tr>
						<td><h2><div class="colors">User Name</div></h2></td>
						<td><input type="text" name="username" placeholder="Enter username" name="username"></td>
					</tr>
					<tr>
						<td><h2><div class="colors">Password</div></h2></td>
						<td><input type="password" name="Password" placeholder="password" name="Password"></td>
					</tr>
					<tr>
						<td><h2><div class="colors">e-mail</div></h2></td>
						<td><input type="email" name="email" placeholder="Enter your mail id" name="email"></td>
					</tr>
					<tr>
						<td><h2><div class="colors">Phone Number</div></h2></td>
						<td><input type="text" name="phno" placeholder="Phone number" name="phno"></td>
					</tr>
					<tr>
						<td><h2><div class="colors">Address</div></h2></td>
						<td><input type="text" name="address" placeholder="enter your address    " name="address" size="100"></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="home.php"><button class="but1">Submit</button></a></td>
					</tr>
				</table>
				</form>





			</div>
				<?php include("connection.php"); 
			if(isset($_POST['username'])){

			if($a==false){
				die("Connection failed:".mysqli_error($a));
			}
			$sql="INSERT INTO user_details(name,username,pass,email,phno,address) values('$_POST[name]','$_POST[username]','$_POST[Password]','$_POST[email]','$_POST[phno]','$_POST[address]')";
		if(mysqli_query($a,$sql))
			{
				header("LOCATION:index.php");
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

