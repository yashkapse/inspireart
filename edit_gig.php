<?php 
    include "nav.php";
    include "links.php";
?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#exampleModal").modal('show');
	});
</script>
</head>
<body>
<div id="exampleModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Gig</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
          <div id="main-content">
            <?php 
                    $gig_id = $_GET['id'];
                    $conn = mysqli_connect("localhost","root","","inspireart");
                    $query = "SELECT * FROM gig WHERE id = {$gig_id}";
                    $result1 = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result1) > 0)
                    {
                        while($rows = mysqli_fetch_assoc($result1))
                        {                 
                   ?>
            <form class="post-form" action="gig_update-data.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" value="<?php echo $gig_id ?>" hidden name="id" >
                <label>Artist Name</label>
                <input type="text" name="art_name" readonly value = "<?php echo $rows['art_name'];?>"/>
              </div>
              <div class="form-group">
                <label style="vertical-align:top;">About</label>
                <textarea style="resize:none;" name="about" id="" class="textarea" rows="5"><?php echo $rows['about'];?></textarea>
              </div>
              <div class="form-group">
                <label>Category</label>
                <?php 
                    $conn = mysqli_connect("localhost","root","","inspireart");
                    $sql = "select * from category";

                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) > 0)
                    {
                      
                    
                  ?>
                <select name="category" id="">
                
                  <option value="0" disabled>Select</option>
                  <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                      if($rows['category'] == $row['category_id'])
                      {
                        $selected = "selected";
                      }
                      else{
                        $selected = "";
    
                      }
                      echo "<option  value='{$row['category_id']}' $selected>{$row['category_name']} </option>";
                    }
                  ?>
                  
                </select>
                <?php }?>
              </div>

              <div class="form-group">
                <label style="vertical-align:top;">Edit Image</label>
                <input type="file" name="new-img" /><br><br>
                <label for="" ></label>
                <img src= "<?php echo "../Admin-Panel/Gig_panel/Gig_image/".$rows['img']?>" name ="img" style="width:300px; height:150px;">
                <input type="hidden" name="old-img" value="<?php echo $rows['img']?>">
              </div>

              <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" value="<?php echo $rows['price'] ?>" />
              </div>  
              <div class="form-group">
                <label>Email</label>
			
                <input type="email" name="email" value="<?php echo $rows['email']?>" />
              </div>
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" value="<?php echo $rows['mobile_number']?>" />
              </div>
            
          </div>
          
        </div>
        <?php } 
                    }
        ?>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-success">Upload</button>
          </div>
        </div>
        </form>
    </div>
</div>



<?php include "footer.php";