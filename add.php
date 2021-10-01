<?php include 'header.php'; ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "inspireart") or die("db connetion failed");
if (isset($_POST['submit'])) {
    $art_email = $_POST['email'];
    $query = "select * from registration where email = '$art_email'";
    $result = mysqli_query($conn, $query) or die("Query can't Run");
    if (mysqli_num_rows($result) > 0) {
?>
        <script>
            alert("Email already exist");
        </script>
<?php
    } else {
        include "savedata.php";
    }
}
?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" />
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="number" />

        </div>
        <div class="form-group">
            <label>Role</label>
            <select name="role" id="">
                <option value="0" selected disabled>role</option>
                <option value="1">Artist</option>
            </select>

        </div>

        <input class="submit" type="submit" value="Save" name="submit" />
    </form>
</div>
</div>
</body>

</html>