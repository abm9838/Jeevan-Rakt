<?php 
    require '../dbcon.php';
    //  if(!isset($_GET['id'])){
    //     header('Location:../index.php');
    //     exit();
    // }else{
    //     if($_GET['id']!=Date('dmY')){
    //         header('Location:../index.php');
    //         exit();
    //     }
    // }
    
    session_start();
    if(isset($_SESSION['aid'])){
        header('location:admin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>JeevanRakht Admin</title>

  <!-- Shortcut Icons -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="apple-touch-icon" type="image/x-icon" href="images/favicon.png">

  <!-- SEO tags -->
  <meta name="description" content="JeevanRakht">
  <meta name="keywords" content="JeevanRakht, Blood Dontation, Blood Bank">

  <!--GOOGLE FONT-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Spectral:400,400i,700,700i" rel="stylesheet">

  <!-- jQuery file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Main CSS file -->
</head>
<body>
<div id="content-area">
</div>
<script>
        // var today = new Date();
        // var dd = String(today.getDate()).padStart(2, '0');
        // var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        // var yyyy = today.getFullYear();

        // today = dd + '-' + mm + '-' + yyyy;
        //document.write(today);
        var user = prompt("Enter your UserName");
        var pass = prompt("Password");  
        if (!user || !pass) {
        window.location.href = "../index.php";}
        
        var varData = 'user='+user+'&pass='+pass;
     
        $.ajax({
            type : 'POST',
            url : 'passCheck.php',
            data : varData,
            success : function(response){
               if(response=="Success"){
                window.location.href = "admin.php";
               }else{
                window.location.href = "index.php";
               }
            }
        });
            

    </script>
</body>
</html>