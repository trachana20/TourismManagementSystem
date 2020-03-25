<?php
include("connection.php");
$sqlnew="select bid from bookings where confirmation='no'";
$result1 = mysqli_query($a,$sqlnew) or die(mysqli_error($a));
while($row=mysqli_fetch_array($result1)){
				$sql="delete from bookings where bid={$row['bid']} ";
				$result=mysqli_query($a,$sql);

	
				$sql2="delete from totalamount where bid={$row['bid']}";
				$result2=mysqli_query($a,$sql2);
				
		}

		echo'<script>alert("Your loggged out"); window.location.href="index.php";</script>';
		

		
				
?>
