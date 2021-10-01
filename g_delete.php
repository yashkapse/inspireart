<?php include 'g_header.php'; ?>

<?php 
    $harsh_localhost = "Location:http://localhost/";
    $nitin_localhost = "Location:http://localhost:8080/";

	if(isset($_POST['deletebtn'])){
    
    $gig_id = $_POST['id'];
	$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
	$query = "delete from gig where id ={$gig_id}";
	$result = mysqli_query($conn,$query)or die("query not run");
	header($harsh_localhost."inspire-art/Admin-Panel/Gig_panel/g_index.php");
	mysqli_close($conn);
		

	}


 ?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

  
</div>
</div>
</body>
</html>
