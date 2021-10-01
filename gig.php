<?php 
ob_start();
?>
<?php include "nav.php";?>
<?php include "links.php";?>


    <div class="container">
        <div class="row">
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
        $limit = 3;
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else{
            $page = 1;
        }
        
        $offset = ($page-1)*$limit;
        $query = "SELECT * FROM gig order by id desc LIMIT {$offset},{$limit} ";
        $result = mysqli_query($conn,$query) or die("Query not Run");
        if(mysqli_num_rows($result) > 0)
        {
            $total_record = mysqli_num_rows($result);
        
        
            for($i = 1;$i<=$total_record;$i++)
            {
                $rows = mysqli_fetch_assoc($result);
                

        ?>
            <div class=" col-sm-6 col-lg-4">
                <div class="card mt-5" data-bs-toggle="modal">
                   
                    <img src="<?php echo '../Admin-Panel/Gig_panel/Gig_image/'.$rows['img'];?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bolder"><?php echo $rows['art_name'];?></h4>
                        <p class="card-text card-about"><?php echo $rows['about'];?></p>
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
                        <h6>Email:<?php echo $rows['email'];?></h6>
                        <h6>Mobile Number:<?php echo $rows['mobile_number'];?></h6>
                        <a href="mailto:{<?php echo $rows['email'];?>}?subject={Hello Harsh}&body={content}" class="text-decoration-none text-dark fw-bolder">Email:<?php echo $rows['email'];?></a><br>
                        <a href="tel:{<?php echo $rows['mobile_number'];?>}"  class="text-decoration-none text-dark fw-bolder">Mobile Number:<?php echo $rows['mobile_number'];?></a><br><br>
                        <a href="single_gig.php?id=<?php echo$rows['id'] ?>" class="btn btn-primary">More Info..</a>

                    </div>
                     
                </div>
                
            </div>
            <?php 
            }
            } ?>

        </div>
        
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
    $sql1="SELECT * FROM gig";
    $result1 = mysqli_query($conn,$sql1) or die("Query not run");
    if(mysqli_num_rows($result1))
    {
        $total_record = mysqli_num_rows($result1);
        $total_page = ceil($total_record/$limit);
        echo '<ul class="pagination">';
        if($page>1)
        {
            echo '<li><a href="gig.php?page='.($page-1).'">Prev</a></li>';
            
        }
        for($i=1;$i<=$total_page;$i++)
        {
            if($i==$page)
            {
                $active = "active";
            }
            else{
                $active = "";
    
            }
            echo '<li class="'.$active.'"><a href = "gig.php?page='.$i.'">'.$i.'</a></li>';
    
    
        }
        if($total_page>$page)
        {
            echo '<li><a href="gig.php?page='.($page+1).'">Next</a></li>';
            
        }
    
    }
    echo "</ul>";
    ?>
    
    <?php include "footer.php";?>
    <?php  ob_end_flush(); ?>
