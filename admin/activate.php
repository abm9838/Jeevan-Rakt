<?php
    require '../dbcon.php';
    if(isset($_POST['Id'])){
        $donerId = $_POST['Id'];
    
        $sql = "UPDATE `doners` SET `Active`='Y' WHERE Id='$donerId'";

        if (mysqli_query($con, $sql)) {
            echo "User activated!";
        } else {
            //echo "Error updating record: " . mysqli_error($conn);
        }

    }
?>