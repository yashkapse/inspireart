<?php 
	
	$conn = mysqli_connect("localhost","root","","inspireart");

	$user_email = $_POST['email'];
	$user_password = $_POST['password'];

	$query = "select * from registration where email = '$user_email'";

	$result = mysqli_query($conn,$query) or die("Query can't run");

	if(mysqli_num_rows($result))
	{
		$row = mysqli_fetch_assoc($result);
		$db_pass = $row['password'];
		$check_pass = ($user_password == $db_pass);
		if($check_pass)
		{
			?>
			<script>
				alert("Login Successfull");
				location.replace("http://localhost/inspire-art/dashboard/dashboard.php");
			</script>

			<?php
			session_start();
			$_SESSION['username'] = $row['username']; 
			$_SESSION['userid'] = $row['id'];
			$_SESSION['userrole'] = $row['role'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['mobile'] = $row['number'];

		}
		else
		{
			?>
			<script>
				alert("Incorrect Password");
				location.replace("http://localhost/inspire-art/Log%20in%20page/login.php");	
			</script>
			<?php 	
		}
	}
	else
	{
		?>
		<script>
			alert("Please Register First");
			location.replace("http://localhost/inspire-art/Join%20page/join.php");	
		</script>
		<?php 
	}
 ?>