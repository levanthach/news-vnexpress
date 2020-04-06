<?php 
	$con = mysqli_connect("localhost","root");
	mysqli_select_db($con,"thachle.vn");
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_close($con);
?>