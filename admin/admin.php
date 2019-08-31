<?php
    session_start();
    require 'dbcon.php';
    //  if(!isset($_GET['id'])){
    //     header('Location:../index.php');
    //     exit();
    // }else{
    //     if($_GET['id']!=Date('dmY')){
    //         header('Location:../index.php');
    //         exit();
    //     }
    // }
    
    //  echo "Id:";
    
        
    if(isset($_SESSION['aid']))  {
         
        
    }
    else{
        header('location:index.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <!-- Shortcut Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="admin.css" />

    

</head>

<body>
    
    <div class="main">

        <div class="img-logo-main">
            <img src="../images/logo.png" alt="Geeks Image" />
        </div>

        <!-- <div class="img-logo">
            <a href="index.html"><img src="../images/logo.png" alt="">
        </div> -->

        <div class="main-nav pt-2 pl-2 pb-2 bg-primary">
            <div class="d-flex ">
                <div class="p-2 flex-grow-1 txt-white"><?php  echo 'Hi! <span class="h6">'.$_SESSION['auser']; ?></span></div>
                <div class="p-2 txt-white">
                    <input type="checkbox" class="input-lg" aria-label="Auto inform" checked>&nbsp;Auto Inform
                </div>
                <div class="p-2">
                    <button type="button" id="logout" class="btn btn-outline-danger btn-sm"><span
                            class="txt-white">Logout</span></button></div>
            </div>
        </div>


        <div class="row">
            <div class="col-2 pd-0">
                <div class="side-nav pl-2">
                    <div class="row pt-2">
                        <div class="col-11">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">

                                <input type="text" class="form-control input-sm mb-2" aria-label="Search"
                                    placeholder="Search">

                                <a class="nav-link active mb-2" id="vn-urgent" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Urgent Need&nbsp;<span
                                        class="badge badge-danger badge-pill">
                                    <?php
                                        $query ="SELECT Urgent, COUNT(*) AS `num` FROM locators Where Urgent='Y' AND Active='Y'";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-locator" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Locators&nbsp;<span
                                        class="badge badge-warning badge-pill">
                                        <?php
                                        $query ="SELECT Active, COUNT(*) AS `num` FROM locators Where Active='Y'";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-doner" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Doners&nbsp;<span
                                        class="badge badge-success badge-pill">
                                        <?php
                                        $query ="SELECT Active, COUNT(*) AS `num` FROM doners Where Active='Y'";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-users" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Reg Users&nbsp;<span
                                        class="badge badge-secondary badge-pill">
                                        <?php
                                            $query1 ="SELECT Id, COUNT(*) AS `num1` FROM doners";
                                            $res1=mysqli_query($con,$query1);
                                            $data1 = mysqli_fetch_assoc($res1);

                                            $query2 ="SELECT Id, COUNT(*) AS `num2` FROM locators";
                                            $res2=mysqli_query($con,$query2);
                                            $data2 = mysqli_fetch_assoc($res2);

                                            $total = intval($data1['num1'])+intval($data2['num2']);
                                            echo $total;
                                        ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-location" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Locations&nbsp;<span
                                        class="badge badge-info badge-pill">
                                        <?php
                                        $query ="SELECT COUNT(DISTINCT Address) AS `num` FROM doners Where Active='Y'";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-history" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">History&nbsp;<span
                                        class="badge badge-info badge-pill">
                                        <?php
                                        $query ="SELECT Id, COUNT(*) AS `num` FROM history";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <a class="nav-link mb-2" id="vn-message" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Messages&nbsp;<span
                                        class="badge badge-success badge-pill">
                                        <?php
                                        $query ="SELECT COUNT(*) AS `num` FROM messages";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['num'];
                                    ?>
                                    </span></a>

                                <p class="visit-count txt-white mt-3 small">Visitor count  <span
                                        class="visit-no">
                                        <?php
                                        $query ="SELECT count FROM webcount where val='web' ";
                                        $res=mysqli_query($con,$query);
                                        $data = mysqli_fetch_assoc($res);
                                        echo $data['count'];
                                    ?>
                                    </span></p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                Main Container
            -->
            <div class="col-10 container-area" id="content-area">
            </div>


        </div>

        <!-- main container End-->
    </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $( document ).ready(function() {

            $("#logout").on("click",function(e){
                window.location.href = "logout.php";
            });
            

            getUrgentData('getUrgent');

            $("#vn-locator").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getLocatorsData('getLocators');
            });
            $("#vn-urgent").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getUrgentData('getUrgent');
            });
            $("#vn-doner").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getDonerData('getDoner');
            });
            $("#vn-users").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getRegUserData('getRegUsers');
            });
            $("#vn-location").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getActiveLocationData('getActiveLocations');
            });
            $("#vn-history").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getHistoryData('getHistory');
            });
            $("#vn-message").on( "click", function( event ) {
                //clear Present Data
                $("#content-area").empty();
                $("#v-pills-tab>a.active").removeClass("active");
                $(this).addClass('active');
                //call for new Data
                getMsgData('getMessages');
            });

        });


        function  getMsgData(key){
            $.ajax({
                url:"msg.php",
                method:"POST",
                dataTpe:"text",
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getMessages'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function  getHistoryData(key){
            $.ajax({
                url:'history.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getHistory'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function  getActiveLocationData(key){
            $.ajax({
                url:'locations.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getActiveLocations'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function  getRegUserData(key){
            $.ajax({
                url:'registeredUsers.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getRegUsers'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function  getDonerData(key){
            $.ajax({
                url:'doner.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getDoner'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function getUrgentData(key){
            $.ajax({
                url:'urgent.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getUrgent'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        function getLocatorsData(key){
            $.ajax({
                url:'locator.php',
                method:'POST',
                dataTpe:'text',
                data : {
                    key : key
                },success:function(response){
                    if(key == 'getLocators'){
                        $('#content-area').append(response);
                    }
                }
            });
        }

        $("#NotifyButton").on( "click", function( event ) {
                var x = $("#ButtonId").val();
                alert("Button Clicked");
                informNow(x);


                function informNow(key){
                //alert("OK Sending Mail.");
                $.ajax({
                    url:'mailSender/Test.php',
                    method:'POST',
                    dataTpe:'text',
                    data : {
                        key : key
                    },success:function(response){
                        // if(key == \''.$data['Id'].'\'){
                        //  //  alert("Message send");
                        // }
                    }
                });
            }
        });

        

            
        
            

            


    </script>

</body>

</html>