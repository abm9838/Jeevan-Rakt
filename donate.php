<?php
  include('assets/header.php');
?>
<body class=" bgr" onload="myfunction();">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="showpop" data-toggle="modal" data-target="#notification" hidden></button>
<button type="button" class="btn btn-primary" id="showinfo"data-toggle="modal" data-target="#information" hidden></button>

<!-- Modal 1-->
<div class="modal fade show" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 
aria-hidden="false" display="block">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Hey! Thankyou</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
        We received you request. we appriciate your decision for donating blood.<br>
        We will inform you soon when someone needs blood in your location.<br><br>
        <small class="text-info"><u><a href="../index.php" >Thankyou! Team Jeevan-Rakt</a></u></small>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="information" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle">Know Before you donate</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
      <p class="text-success">Few drops of your blood can save someones life 🙂.</p>
      <p><span class="text-info">Note: </span>Before you donate blood you must know some points -</p>
        <ul class="">
          <li>You are eligible to donate blood if you are in good health</li>
          <li>Your weigh at least 50Kg and are 17 years or older.</li>
          <li>You are not eligible to donate blood if you:
            <ul>
              <li>Have ever used self-injected drugs (non-prescription)</li>
              <li>Had hepatitis</li>
              <li>Are in a high-risk group for AIDS</li>
              <li>You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.</li>
              <li>Have ever injected recreational drugs.</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
  include('assets/nav.php');
?>
    
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
        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block" onclick="validate();"> Send Msg </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<?php 
  include('assets/footer.php');
?>
</body>
<script>
  $(document).ready(function() {
    var btn =  $("#submit");
    $('input').focusout(function() {
        if(this.value==""){
            $(this).css('border', "2px solid red");
            $(this).focus();
            btn.disabled = true;
        }else{
          $(this).css('border', "2px solid green");
          btn.disabled = false;
        }
    });
    $('select').focusout(function() {
        if(this.value==""){
            $(this).css('border', "2px solid red");
            $(this).focus();
            btn.disabled = true;
        }else{
          $(this).css('border', "2px solid green");
          btn.disabled = false;
        }
    });


  });
  
</script>
</html>


<?php

include('dbcon.php');
echo '<script type="text/javascript">',
      '$("#showinfo").click();',
      '</script>';

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
    
    $id=substr(str_shuffle("9ASDF1G0HJKLMN8BVC7XZ6QWE5RTY2UIO43P"), 1, 8);

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
      echo '<script type="text/javascript">',
            '$("#showpop").click();setTimeout(myFunction, 10000); function myFunction(){
              window.location.href ="index.php";
            }',
            '$("#close").on("click",function(){
              window.location.href ="index.php";
            });',
            '</script>';
      header('Location: index.php');
    }


}

?>