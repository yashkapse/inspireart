<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
        if(isset($_POST['update']))
        {
            $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
            $art_email = $_POST['email'];
            $query1 = "select * from registration where email = '$art_email'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0)
            {
                ?>
                <script>
                    alert("Email already Exist");
                </script>
                <?php 

            }
            else
            {
                include "updatedata.php";
            }
        }
    
    ?>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <?php 

        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $art_id = $_GET['id'];
        $query = "select * from registration where id={$art_id}";
        $result = mysqli_query($conn,$query) or die("Query Not Run");
        if(mysqli_num_rows($result) > 0){

              while($row=mysqli_fetch_assoc($result)){
?>
      <div class="form-group">
          <label>Email</label>
          <input type="hidden" name="id" value=" <?php echo $row['id'] ?> "/>
          <input type="text" name="email" value=" <?php echo $row['email'] ?> "/>
      </div>
      <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" value=" <?php echo $row['username'] ?> "/>
      </div>
      <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="number" value=" <?php echo $row['number'] ?> "/>
        <?php } ?>
      </div>
      
      <input class="submit" type="submit" value="Update" name = "update"/>
    </form>

    <?php 
    
      }
        
     ?>
     
</div>
</div>
    
</body>
</html>
