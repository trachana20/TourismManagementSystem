<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
		<div id="header">
			<div id="logo">
				<img src="img/travelites.png" width=300 height=150>
			</div>
			<div id="nav">
				
			</div>
		</div>
	<div class="admin1">
		<div id="product_bottom"><h1>ADMIN</h1></div>
		<form action="" method="post">
			<input type="number" placeholder="AdminID" name="adminid">
			<input type="password" placeholder="Password" name="password">
			<a href="home.php"><input type="submit" name="submit" value="login"></a>
					
			
		</form>
		<?php include("connection.php");
				if(isset($_POST['submit']))
				{
					if($a==false){
						die("Connection failed:".mysqli_error($a));
					}
					$sql="SELECT * FROM admin WHERE adminid ='$_POST[adminid]' and password ='$_POST[password]'";
					$result = mysqli_query($a,$sql) or die(mysqli_error($a));
					$rows = mysqli_num_rows($result);
				
				if($rows==1)
        		{
        			header("LOCATION:adminhome.php");

        		}
        		else{
        			echo"Invalid Credentials.";
        		}
        	}
		
			
			mysqli_close($a);
	
		?>	

	</div>
</body>
</html>