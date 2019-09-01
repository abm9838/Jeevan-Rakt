<?php 
    include('dbcon.php');
    include('assets/header.php');
?>

<body class=" bgr" onload="myfunction();">




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="showSuccess" data-toggle="modal" data-target="#notification" hidden></button>

<!-- Modal -->
<div class="modal fade show" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 
aria-hidden="false" display="block">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Hey! Don't worry. We received your details ✔</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
        We will inform you soon when we find someone who can help you in your location. We will work hard to find a doner for you.<br><br>
        <small class="text-info"><u><a href="../index.php" >Thankyou! Team Jeevan-Rakt</a></u></small>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
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
	<p class="text-center">Don't worry we will find someone to help you. Kindly write your details below.
    We will inform you when we get anyone. 
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
        <input name="Name" id="name" class="form-control" placeholder="Full Name" type="text" required>
    </div> 
    <!--Email -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="Email" class="form-control" placeholder="Email Address" type="email" required>
    </div>
     <!-- Contact No -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 70px;" >
		    <option selected="">+91</option>
		    <option value="1">+1</option>
		    <option value="2">+23</option>
		    <option value="3">+701</option>
		</select>
    	<input name="Mob" class="form-control" placeholder="Mobile Number" type="text" required>
    </div> 
    <!-- Blood Group -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-heartbeat"></i> </span>
		</div>
		<select class="form-control" name="BloodGr" required>
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
		<select class="form-control" name="Gender" required>
			<option selected="" value=""> Gender</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
    </select>
  </div>
  <!-- States -->
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		</div>
		<select class="form-control" name="States" required>
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
        <input placeholder="Date Of Birth" class="textbox-n form-control" type="text" onfocus="(this.type='date')" name="DOB" required>
       <!-- <input class="form-control" type="date" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date Of Birth" name="DOB" required>
    
    -->
    </div> 
    
    <!-- Additional -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
    </div>
        <input class="form-control" placeholder="Addition Details" type="text" name="Additional" required>
    </div> 
    
    <!-- Notify ME-->  
    <div class="form-check-inline">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input ml-2" name="urgent" > very urgent case 
    </label>
  </div>  
  <!-- Main Button -->                                  
    <div class="form-group mt-2">
        <input type="submit" id="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="../index.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<?php 
    include('assets/footer.php');
?>
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

</body>
</html>


<?php

if(isset($_POST['submit'])){
    
    $name= $_POST['Name'];
    $email= $_POST['Email'];
    $mob = $_POST['Mob'];
    $bloodGr = $_POST['BloodGr'];
    $gender = $_POST['Gender'];
    $states = $_POST['States'];
    $dob = $_POST['DOB'];
    $additional =  $_POST['Additional'];
    $urgent = 'N';
    if(isset($_POST['urgent'])){
      $urgent = 'Y';
    }
    
    date_default_timezone_set("Asia/Kolkata");
    $currentDate = Date('Y-m-d H:i:s'); 
    $n = rand(1,7);
    $img = '../images/Profile/Male_Dummy('.$n.').png';
    if($gender=="F"){
      $img = '../images/Profile/Female_Dummy('.$n.').png';
    }
    $id=substr(str_shuffle("9ASDF1G0HJKLMN8BVC7XZ6QWE5RTY2UIO43P"), 0, 7);

    echo $dob;
    echo $gender;
    echo $bloodGr;


    $query= "INSERT INTO `locators`(`Id`, `Active`, `Urgent`, `Name`, `BloodGr`,`Gender`, `DOB`,
     `Mob`, `Email`, `Address`, `LastPostDate`, `AditionalDetails`, `RegDate`, `Img`) 
    VALUES ('$id','Y','$urgent','$name','$bloodGr','$gender','$dob','$mob','$email',
    '$states','$currentDate','$additional','$currentDate','$img')";

    $res=mysqli_query($con,$query);
   // $ndata = mysqli_fetch_assoc($res);
       
    if($res){
      echo '<script type="text/javascript">',
      '$("#showSuccess").click();',
      '$("#close").on("click",function(){
        window.location.href ="../index.php";
      });',
      '</script>';
        
    }else{
        ?>
        <script>
            alert('oops! Some Error occured!.\We will solve it soon! Team Jeevan-Rakt');
        
        </script>
        
        <?php
    }


}

?>