<?php include 'g_header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    
    <?php
    if (isset($_POST['showbtn'])) {

        $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
        $gig_id = $_POST['id'];
        $query = "select * from gig where id={$gig_id}";
        $result = mysqli_query($conn, $query) or die("Query Not Run");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
    
                <form class="post-form" action="g_updatedata.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                    <label for="">Artist Name</label>
                        <input type="text" readonly name="art_name" value="<?php echo $row['art_name'] ?>" />
                    </div>
                    <div class="form-group">
                        <label style="vertical-align:top;">About</label>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                        <textarea style="resize:none;" name="about" id="" cols="41" class="textarea" rows="5"><?php echo $row['about'] ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" id="">
                            <option value="" selected disabled>Select</option>
                            <?php
                $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
                $sql = "SELECT * FROM category";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {

                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        if($row1['category_id']==$row['category'])
                        {
                            $selected = "selected";
                        }
                        else{
                            $selected = "";

                        }
                        echo "<option $selected value='{$row1['category_id']}'>{$row1['category_name']}</option>";



                ?>
                    <?php } ?>
            </select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" value="<?php echo $row['price'] ?>" />
                    </div>
                    
                    <div class="form-group">
                        <label style="vertical-align:top;">Edit Image</label>
                        <input type="file" name="new-img" value="">
                        <img name = "img" src="<?php echo"Gig_image/". $row['img'] ?>" alt="" style="width:50%; height:50%;">
                        <input type="hidden" name="old-img" value="<?php echo $row['img']?>">
                    </div>
                    

                    <input class="submit" type="submit" value="Update" 
                    name = "update"/>
                </form>
    <?php
            }
        }
    }
}
    ?>
    
</div>
</div>
</body>

</html>