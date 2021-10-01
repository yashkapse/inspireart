<?php include "links.php" ?>
<?php include "nav.php" ?>
<div class="container">
        <div class="row">
        <?php 
        $gig_id = $_GET['id'];
        $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
        $query = "SELECT * FROM gig where id = $gig_id";
        $result = mysqli_query($conn,$query) or die("Query not Run");
        if(mysqli_num_rows($result) > 0)
        {
            $total_record = mysqli_num_rows($result);
        
        
            for($i = 1;$i<=$total_record;$i++)
            {
                $rows = mysqli_fetch_assoc($result);
                

        ?>
            <div class=" col-sm-6 col-lg-8 offset-lg-2">
                <div class="card mt-5" data-bs-toggle="modal">
                   
                    <img src="<?php echo '../Admin-Panel/Gig_panel/Gig_image/'.$rows['img'];?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bolder"><?php echo $rows['art_name'];?></h4>
                        <p class="card-text"><?php echo $rows['about'];?></p>
                        <h5 class="mt-3">
                        <?php 
                            if( $rows['category']==1)
                            {
                                echo   "Graphic Design";
                            }
                            else if( $rows['category']==2)
                            {
                                echo   "Programming And Tech";
                            }
                            else if( $rows['category']==3)
                            {
                                echo   "Digital Marketing";
                            }
                            else if( $rows['category']==4)
                            {
                                echo   "Music & Audio";
                            }
                            else if( $rows['category']==5)
                            {
                                echo   "Bussiness";
                            }
                            else if( $rows['category']==6)
                            {
                                echo   "Other";
                            }
                        
                        ?>
                        </h5>
                        <hr>
                        <p class="m-0 d-inline">Price:
                        <h4 class="d-inline"><?php echo $rows['price'];?>$</h4>
                        </p>
                        <a href="mailto:{<?php echo $rows['email'];?>}?subject={Hello Harsh}&body={content}" class="text-decoration-none text-dark fw-bolder">Email:<?php echo $rows['email'];?></a><br>
                        <a href="tel:{<?php echo $rows['mobile_number'];?>}"  class="text-decoration-none text-dark fw-bolder">Mobile Number:<?php echo $rows['mobile_number'];?></a><br><br>

                    </div>
                     
                </div>
                
            </div>
            <?php 
            }
            } ?>

        </div>
        
    </div>
<?php include "footer.php" ?>