<?php 
    if(isset($_FILES['img']))
    {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        echo $file_name = $_FILES['img']['name'];echo "<br>";
        echo $file_size = $_FILES['img']['size'];echo "<br>";
        echo $file_tmp = $_FILES['img']['tmp_name'];echo "<br>";
        echo $file_type = $_FILES['img']['type'];echo "<br>";
        
        move_uploaded_file($file_tmp,"Gig_image/".$file_name);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">File</label>
        <input type="file" name="img">
        <input type="submit">
    </form>
</body>

</html>