<?php 
	$conn = mysqli_connect("localhost","root","","inspireart")or die("db connetion failed");

	$art_email = mysqli_real_escape_string($conn,$_POST['email']);
	$art_username = mysqli_real_escape_string($conn,$_POST['username']);
	$art_password = mysqli_real_escape_string($conn,$_POST['password']);
	$art_number = mysqli_real_escape_string($conn,$_POST['number']);

	// $hash_password = password_hash($user_password,PASSWORD_BCRYPT);
	
	$query = "select * from registration where email = '$art_email'";
	$result = mysqli_query($conn,$query)or die("query can't run");	
	if(mysqli_num_rows($result) > 0){
		?>
		<script>
			 var a = confirm("This Email Id Is Already Exist");
			if(a){
				 
					location.replace("http://localhost/inspire-art/Join%20page/join.php");
				
			}
			else{
				location.replace("http://localhost/inspire-art/Join%20page/join.php");
			}
			
		</script>
		<?php
	}
	else{
		$query1 = "insert into registration(email,username,password,number)
		values('$art_email','$art_username','$art_password','$art_number')";

		$result1 = mysqli_query($conn,$query1);
		
		if($result1)
		{
			?>
			
			<script> 

				var confirm_insert = confirm("Successfully Registered"); 
				if(confirm_insert)
				{
					location.replace("http://localhost/inspire-art/Log%20in%20page/login.php");	
				}
				else
				{
					location.replace("http://localhost/inspire-art/Log%20in%20page/login.php");		
				}	
			</script>
			<?php 
		}
		mysqli_close($conn);

	}



 ?>