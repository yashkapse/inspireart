<?php 
//   session_start();

//   if(!isset($_SESSION['username']))
//   {
//     header("Location:http://localhost/inspire-art/Log%20in%20page/login.php");
//   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>" media="all" type="text/css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>INSPIREART</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="../main_panel.php">Main Panel</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="update.php">Update</a>
                </li>
                 <li>
                    <a href="search.php">Search</a>
                </li>
                <li>
                    <a href="delete.php">Delete</a>
                </li>
            </ul>
        </div>