<?php
    $localhost = "localhost";
    $username ="pms";
    $password = "pms";
    $db = "pms";

    // $con = mysqli_connect($localhost, $username, $password, $db);
    $con = mysqli_connect($localhost, '', '', $db);
    
    if (mysqli_connect_errno()) {
        echo "Something went wrong, chech Database: ". mysqli_connect_error();
    } else {
        //echo "Database connected successfully";
    }
?>