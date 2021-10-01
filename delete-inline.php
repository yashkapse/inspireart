<?php 

	$harsh_localhost = "Location:http://localhost/";
	$nitin_localhost = "Location:http://localhost:8080/";

	$art_id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
	$query = "delete from registration where id ={$art_id}";
	$result = mysqli_query($conn,$query)or die("query not run");
	header($harsh_localhost."inspire-art/Admin-Panel/Artist_panel/index.php");
	mysqli_close($conn);	
?>