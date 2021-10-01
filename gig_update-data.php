<?php 

	if(empty($_FILES['new-img']['name']))
	{
		$filename = $_POST['old-img'];
		
	}	
	else{
		echo $filename = $_FILES['new-img']['name'];
    	echo $file_size = $_FILES['new-img']['size'];
    	echo $file_tmp = $_FILES['new-img']['tmp_name'];
    	echo $file_type = $_FILES['new-img']['type'];
		

    move_uploaded_file($file_tmp, "../Admin-Panel/Gig_panel/Gig_image/" . $filename);
		$filename = $_FILES['new-img']['name'];
		
		
	}
		$art_id = $_POST['id'];
		$art_about = $_POST['about'];
		$art_category = $_POST['category'];	
        $art_price = $_POST['price'];
        $art_email = $_POST['email'];
        $art_number = $_POST['mobile_number'];
        


		$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
		$query = "update gig SET about = '{$art_about}',category = '{$art_category}',
					price = '{$art_price}',img='{$filename}',email='{$art_email}',mobile_number='{$art_number}' where id = '{$art_id}'";
		$result = mysqli_query($conn,$query) or die("Query Not Run");

		header("Location:http://localhost/inspire-art/dashboard/myprofile.php");

		mysqli_close($conn); 

 ?>