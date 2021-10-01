<?php 

	if(empty($_FILES['new-img']['name']))
	{
		$filename = $_POST['old-img'];
		
	}	
	else{
		$filename = $_FILES['new-img']['name'];
		
		
	}
		$art_id = $_POST['id'];
		$art_about = $_POST['about'];
		$art_category = $_POST['category'];	
        $art_price = $_POST['price'];
        


		$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
		$query = "update gig SET about = '{$art_about}',category = '{$art_category}',
					price = '{$art_price}',img='{$filename}' where id = '{$art_id}'";
		$result = mysqli_query($conn,$query) or die("Query Not Run");

		header("Location:http://localhost/inspire-art/Admin-Panel/Gig_panel/g_index.php");

		mysqli_close($conn); 

 ?>