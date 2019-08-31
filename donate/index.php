

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeevan Rakht</title>
    <!-- Shortcut Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../images/favicon.png">

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
  
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Main CSS file -->
  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />


</head>
<body class=" bgr">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand d-lg-none" href="../index.php">Jeevan Rakht</a>
        <button class="navbar-toggler mt-2 mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li><a href="">About</a></li>
              <li><a href="">Why donate?</a></li>
              <li><a href="">Eligibility</a></li>
              <li class="brand d-none d-lg-block"><a href="../index.php"><img src="../images/logo.png" alt=""></a></li>
              <li><a href="">How to donate?</a></li>
              <li><a href="">FAQ & Info</a></li>
              <li><a href="../contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>


    
<div class="container  bgr">
<br>  
<div class="card bgd text-white">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Enter Your Details</h4>
	<p class="text-center">Thanks! for your interest in donating blood. we will inform you soon when someone needs your help. 
  </p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="text-success">OR</span>
    </p>
    <!--- FORM -->
	<form method="POST">
    <!-- name-->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="Name" class="form-control" placeholder="Full Name" type="text" required >
    </div> 
    <!--Email -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="Email" class="form-control" placeholder="Email Address" type="email" required >
    </div>
     <!-- Contact No -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;" required >
		    <option selected="">+91</option>
		    <option value="1">+1</option>
		    <option value="2">+23</option>
		    <option value="3">+701</option>
		</select>
    	<input name="Mob" class="form-control" placeholder="Mobile Number" type="text">
    </div> 
    <!-- Blood Group -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-heartbeat"></i> </span>
		</div>
		<select class="form-control" name="BloodGr" required >
			<option selected=""> Blood group</option>
			<option>A+</option>
			<option>O+</option>
      <option>B+</option>
      <option>AB+</option>
      <option>A-</option>
      <option>B-</option>
      <option>O-</option>
      <option>AB-</option>
		</select>
  </div>
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-male"></i> </span>
		</div>
		<select class="form-control" name="Gender" required >
			<option selected="" value="0"> Gender</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
    </select>
  </div>
  <!-- States -->
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		</div>
		<select class="form-control" name="States" required >
    <?php 
          $states  = array ('Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu & Kashmir', 'Jharkhand',
            'Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu',
            'Tripura','Uttarakhand','Uttar Pradesh','West Bengal','Andaman & Nicobar','Chandigarh','Dadra and Nagar Haveli','Daman & Diu','Delhi','Lakshadweep','Puducherry');

           for ($x=0; $x<count($states);$x++){
             echo '<option>'.$states[$x].'</option>';
           }
           
        ?>
		</select>
  </div>


  <!-- DOB -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		</div>
        <input class="form-control" type="date" placeholder="Date Of Birth" name="DOB" required >
    </div> 
    
    <!-- Additional -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
    </div>
        <input class="form-control" id="addtional" placeholder="Addition Details or Illness" type="text" name="Additional" required >
    </div> 
    
    <!-- Notify ME-->  
    <div class="form-check-inline">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input ml-2" name="notify" > send me updates
    </label>
  </div>  
  <!-- Main Button -->                                  
    <div class="form-group mt-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="validate();"> Send Msg </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<!-- Footer -->
 <!-- FOOTER Section -->
 <footer class="mainfooter">
        <div class="container py-5">
          <div class="row text-center">
    
            <div class="col-xs-6 col-sm-12 col-md-3 col-lg-3">
    
              <!--Column1-->
              <div class="footer-pad">
                <h5>JeevanRakht</h5>
    
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Why Donate</a></li>
                    <li><a href="#">Eligibility</a></li>
                    <li><a href="#">How to Donate</a></li>
                    <li><a href="#">FAQ &amp; Info.</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                  </ul>
    
              </div>
            </div>
    
            <div class="col-xs-6 col-sm-12 col-md-3 col-lg-3">
    
              <!--Column1-->
              <div class="footer-pad">
                <h5>Get Involved</h5>
                <ul class="list-unstyled">
                  <li><a href="index.php">Donate Blood</a></li>
                  <li><a href="../locate/index.php">Locate Blood</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    
              <!--Column1-->
              <div class="footer-pad">
                <h5>Stay Connected</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://www.facebook.com/jeevanrakt"><i class="p-1 fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/jeevanrakt"><i class="p-1 fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/jeevanrakt"><i class="p-1 fab fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    
              <!--Column1-->
              <div class="footer-pad">
                <div class="footer-subscribe">
                  <h5>YOU MAY NOT THINK YOU'RE AN ACTIVIST...<br>BUT WE DO</h5>
                  <br><br>
                  <div class="email-btn-wrapper">
                    <input type="email" class="footer-email" placeholder="Email ID">
                    <button class="btn-join">JOIN</button>
                    <br>
                    <br>
                    <input type="checkbox" class="m-1">
                    <p class="d-inline p-1">Yes, I'd also like to hear more about blood donation.</p>
                  </div>
    
                </div>
              </div>
            </div>
    
    
          </div>
        </div>
        <div class="after-footer pr-5 pl-5 py-3 justify-content-sm-center text-right">
          <a href="#" class="m-2">Privacy Policy</a>
          <a href="#" class="m-2">Terms of Service</a>
        </div>
      </footer>

      <script>
       // $('#addtional').
      <script>

</body>
</html>


<?php

include('../dbcon.php');

if(isset($_POST['submit'])){
    
    $name= $_POST['Name'];
    $email= $_POST['Email'];
    $mob = $_POST['Mob'];
    $bloodGr = $_POST['BloodGr'];
    $gender = $_POST['Gender'];
    $states = $_POST['States'];
    $dob = $_POST['DOB'];
    $additional =  $_POST['Additional'];
    $notify = 'N';
    if(isset($_POST['notify'])){
      $notify = 'Y';
    }
    
    date_default_timezone_set("Asia/Kolkata");
    $currentDate = Date('Y-m-d H:i:s'); 
    $n = rand(1,8);
    $img = '../images/Profile/Male_Dummy('.$n.').png';
    if($gender=="F"){
      $img = '../images/Profile/Female_Dummy('.$n.').png';
    }
    
    $id=substr(str_shuffle("9ASDF1G0HJKLMN8BVC7XZ6QWE5RTY2UIO43P"), 0, 7);

    echo $dob;
    echo $gender;
    echo $bloodGr;

    

    $query= "INSERT INTO `doners`(`Id`, `Active`, `Name`, `BloodGr`, `Gender`, `Address`, `DOB`,
    `LastPostDate`, `LastDonationDate`, `Mob`, `Email`, `RegDate`, `NotifyMe`, `Img`, `AditionalDetails`)
    VALUES ('$id','N','$name','$bloodGr','$gender','$states','$dob','$currentDate','1900-00-00',
    '$mob','$email','$currentDate','$notify','$img','$additional')";

    $res=mysqli_query($con,$query);
   // $ndata = mysqli_fetch_assoc($res);
       
    if($res){
        ?>
        <script>
            alert('We have received your details.\nWe will inform you soon when someone needs your help.\nThankyou! Team Jeevan-Rakt');
        </script>
        
        <?php
        
    }


}

?>