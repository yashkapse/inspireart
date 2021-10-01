<?php

        $harsh_localhost = "Location:http://localhost/";
	$nitin_localhost = "Location:http://localhost:8080/";

        $art_email = $_POST['email'];
        $art_username = $_POST['username'];
        $art_password = $_POST['password'];
        $art_number = $_POST['number'];
        $art_role = $_POST['role'];

        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $query = "insert into registration(email,username,password,number,role)
        values('{$art_email}','{$art_username}','{$art_password}','{$art_number}','{$art_role}')";
        $result = mysqli_query($conn,$query) or die("Query Not Run");
        header($harsh_localhost."inspire-art/Admin-Panel/Artist_panel/index.php");
        mysqli_close($conn);	
?>




