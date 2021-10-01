<?php 
	$harsh_localhost = "Location:http://localhost/";
	$nitin_localhost = "Location:http://localhost:8080/";

	$gig_id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
	$query = "delete from gig where id ={$gig_id}";
	$result = mysqli_query($conn,$query)or die("query not run");
	header($harsh_localhost."inspire-art/Admin-Panel/Gig_panel/g_index.php");
	mysqli_close($conn);	
?>

