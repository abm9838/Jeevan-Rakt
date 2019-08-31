<?php 

  //  $con = mysqli_connect("localhost","id10682935_abm9838","Jeevan-Rakt","id10682935_jeevanrakt");
    $con = mysqli_connect("localhost","root","","id10682935_jeevanrakt");

    if($con){
        //echo "connection successfull";
    }
    else{
        echo mysql_error();
    }
?>