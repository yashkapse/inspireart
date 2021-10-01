<?php 
	$harsh_localhost = "Location:http://localhost/";
	$nitin_localhost = "Location:http://localhost:8080/";

	$gig_id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
	$query = "delete from gig where id ={$gig_id}";
	$result = mysqli_query($conn,$query)or die("query not run");
	header("location:http://localhost/inspire-art/dashboard/myprofile.php");
	mysqli_close($conn);	
?>