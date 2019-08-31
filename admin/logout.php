<?php

    session_start();
    require 'dbcon.php';
    //UPDAte DB
    $current_id = $_SESSION['aid'];
    date_default_timezone_set("Asia/Kolkata");
    $timeStamp =  Date('Y-m-d H:i:s');
    $sql = "UPDATE `admin0` SET `LastActive`='$timeStamp',`OnlineStatus`='F' WHERE Id='$current_id'";

    if (mysqli_query($con, $sql)) {
       // echo "Record updated successfully";
    } else {
        //echo "Error updating record: " . mysqli_error($conn);
    }


    session_destroy();

    header('location:../index.php');

    

?>