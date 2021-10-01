<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scal col-sm-6    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" media="all" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
        <?php
                    $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
                    $query = "select * from gig";

                    $result = mysqli_query($conn, $query) or die("Query failed");

                    if (mysqli_num_rows($result) > 0) {
                        while($rows = mysqli_fetch_assoc($result))
                        {

            
                        
                        
                    ?>
                    <div class=" col-sm-6 col-lg-4">
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
                <div class="card mt-5">
                    
                    </h5>
                        <hr>
                        <p class="m-0 d-inline">Price:
                        <h4 class="d-inline"><?php echo $rows['price'];?>$</h4>
                        </p>
                    </div>
                    <?php }} ?>  
                </div>
                
            </div>

        </div>
    </div>

</body>

</html>