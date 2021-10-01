<?php include 'g_header.php'; ?>
<?php
if (isset($_FILES['img'])) {
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_type = $_FILES['img']['type'];

    move_uploaded_file($file_tmp, "Gig_image/" . $file_name);
    include "g_savedata.php";
}
?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" name="art_name" />
        </div>
        <div class="form-group">
            <label style="vertical-align:top;">About</label>
            <textarea style="resize:none;white-space: pre-line;white-space: pre-wrap;" name="about" id="" cols="51" class="textarea" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" id="">
                <option value="" selected disabled>Select</option>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";



                ?>
                    <?php } ?>
            </select>
        <?php } ?>

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

