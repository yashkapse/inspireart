<?php
        $harsh_localhost = "Location:http://localhost/";
        $nitin_localhost = "Location:http://localhost:8080/";

        $gig_art_name = $_POST['art_name'];
        $gig_about = $_POST['about'];
        $gig_category = $_POST['category'];
        $gig_image = $_FILES['img']['name'];
        $gig_price = $_POST['price'];
        $gig_email = $_POST['email'];
        $gig_mobile_number = $_POST['mobile_number'];

        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $query = "insert into gig(art_name,about,category,img,price,email,mobile_number)
        values('{$gig_art_name}','{$gig_about}','{$gig_category}','{$gig_image}','{$gig_price}','{$gig_email}','{$gig_mobile_number}')";
        $result = mysqli_query($conn,$query) or die("Query Not Run");
        
        // header($harsh_localhost."");
        mysqli_close($conn);	
