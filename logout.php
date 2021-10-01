<?php 
    session_start();

    session_unset();

    session_destroy();

    header("Location:http://localhost/inspire-art/Log%20in%20page/login.php");

?>