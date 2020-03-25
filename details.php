<?php
include("connection.php");
$new1=$_GET['bid'];
$sql="delete from bookings where bid=".$_GET['bid'];
$result=mysqli_query($a,$sql);
$sql2="delete from totalamount where bid=".$_GET['bid'];
$result2=mysqli_query($a,$sql2);
if(mysqli_query($a,$sql)){
echo'<script>alert("your booking deleted"); window.location.href="myaccount.php";</script>';
}
?>
