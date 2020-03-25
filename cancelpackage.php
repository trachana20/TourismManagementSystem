<?php
include("connection.php");
$new1=$_GET['packageid'];
$sql="delete from packages where packageid=".$_GET['packageid'];
$result=mysqli_query($a,$sql);

if(mysqli_query($a,$sql)){
echo'<script>alert("PACKAGE DELETED"); window.location.href="adminpackages.php";</script>';
}
?>