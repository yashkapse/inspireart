<?php include 'g_header.php'; ?>
<?php 
    if(isset($_FILES['img']))
    {
        $file_name = $_FILES['img']['name'];
        $file_type = $_FILES['img']['type'];
        $file_tmp_name = $_FILES['img']['tmp_name'];
        $file_size = $_FILES['img']['size'];

        move_uploaded_file($file_tmp_name,"Gig_image/" . $file_name);
        $harsh_localhost = "Location:http://localhost/";
        $nitin_localhost = "Location:http://localhost:8080/";

        $gig_art_name = $_POST['art_name'];
        $gig_about = $_POST['about'];
        $gig_category = $_POST['category_name'];
        $gig_image = $_FILES['img']['name'];
        $gig_price = $_POST['price'];
        $gig_email = $_POST['email'];
        $gig_mobile_number = $_POST['mobile_number'];

        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $query = "insert into gig(art_name,about,category,img,price,email,mobile_number)
        values('{$gig_art_name}','{$gig_about}','{$gig_category}','{$gig_image}','{$gig_price}','{$gig_email}','{$gig_mobile_number}')";
        $result = mysqli_query($conn,$query) or die("Query Not Run");
        header($harsh_localhost."inspire-art/Admin-Panel/Gig_panel/g_index.php");
        mysqli_close($conn);	

    }
?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" name="art_name" />
        </div>
        <div class="form-group">
            <label style = "vertical-align:top;" >About</label>
            <textarea name="about" id="" cols="43" class="textarea" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" />
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="img" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" />
        </div>
        <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="mobile_number" />
        </div>

        <input class="submit" type="submit" value="Save" name="submit" />
    </form>
</div>
</div>
</body>

</html>