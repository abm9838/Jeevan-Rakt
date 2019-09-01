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

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <style>
    /* body {
      background: linear-gradient(90deg, #b9301c 20px, transparent 10%) center, 
      linear-gradient(#b9301c 20px, transparent 10%) center, #dd5f55;
      background-size: 22px 22px;
    } */
    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #9a3a3a;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

  </style>
</head>
<body >
<!-- Button trigger modal -->
<button type="button" id="trigger" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" hidden></button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form class="form-signin">
        <img class="mb-4 mx-auto d-block" src="../images/jeevan-rakt-logo.png" alt="" width="150" height="70">
        <label for="inputEmail" class="sr-only">UserName</label>
        <input type="text" id="user" class="form-control" placeholder="UserName" required="" autofocus=""><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block mt-3" id="submit" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted small">Jeevan-Rakt &copy;2019</p>
      </form>

    </div>
  </div>
</div>

    <div id="content-area">
    </div>
    <script>

      $( document ).ready(function() {
        
        $("#trigger").click();
        $("user").focus();
     

        // var today = new Date();
        // var dd = String(today.getDate()).padStart(2, '0');
        // var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        // var yyyy = today.getFullYear();

        // today = dd + '-' + mm + '-' + yyyy;
        //document.write(today);

        

        // var user = prompt("Enter your UserName");
        // var pass = prompt("Password");  
        // if (!user || !pass) {
        // window.location.href = "../index.php";}
        
        // var varData = 'user='+user+'&pass='+pass;

          $("#submit").on('click',function(){
            var user = $('#user').val();
            var pass = $('#pass').val();
            var varData='';
            if(user!="" && pass!=""){
              varData = 'user='+user+'&pass='+pass;
            }
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
      });
    });
            

    </script>
</body>
</html>