<?php 
    require 'dbcon.php';
    include('assets/header.php');
    include('assets/nav.php');

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="showpop" data-toggle="modal" data-target="#notification" hidden></button>

<!-- Modal -->
<div class="modal fade show" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" 
aria-hidden="false" display="block">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">We received your details ✔</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
        We will contact you soon regarding your issue. Thanks for using our service.<br>We insist you to donate blood. for more information
        visit our website <a href="https://jeevan-rakt.000webhostapp.com/">Jeevan-Rakt.</a><br>
        <span class="text-success">Your few drops of blood can save someones life. 🙂</span><br>
        <small class="text-info"><u><a href="index.php" >Thankyou! Team Jeevan-Rakt</a></u></small>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-2">
</div>
<div class="col-8">

<!--Section: Contact v.2-->
<section class="mb-4 text-white">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 pl-1 pr-1">Please do not hesitate to contact us directly.<br>
     Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" method="POST" onsubmit>

                <!--Grid row-->
                <div class="row mb-3">

                    <!--Grid column-->
                    <div class="col-md-6 mb-3">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="tel" id="tel" name="mobile" class="form-control" placeholder="Mobile" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" require>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-3">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message here..."></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                <button class="btn btn-primary" id="submit"  name="submit">Send</button>
            </div>

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Hyderabad Telangana</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 9999999999</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@jeevan-rakt.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</div>
<div class="col-2">
</div>

</div>

<script>


$(document).ready(function() {

    $('#name').focusout(function() {
            if(this.value==""){
                $(this).css('border', "2px solid red");
                $(this).focus();
            }
        });
    $('#tel').focusout(function() {
        if(this.value==""){
            $(this).css('border', "2px solid red");
            $(this).focus();
        }
    });
    $('#email').focusout(function() {
        if(this.value==""){
            $(this).css('border', "2px solid red");
            $(this).focus();
        }
    });
    $('#message').focusout(function() {
        if(this.value==""){
            $(this).css('border', "2px solid red");
            $(this).focus();
        }
    });
});

</script>

<?php 
    include('assets/footer.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mob = $_POST['mobile'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
        $date = Date('y-m-d');
        $id=substr(str_shuffle("9ASDF1G0HJKLMN8BVC7XZ6QWE5RTY2UIO43P"), 0, 7);

        $q1 = "INSERT INTO `messages`(`Id`, `Name`, `Mob`, `Email`, `Date`, `Msg`) 
        VALUES ('$id','$name','$mob','$email','$date','$msg')";
        $res=mysqli_query($con,$q1);
   // $ndata = mysqli_fetch_assoc($res);
       
    if($res){
        echo '<script type="text/javascript">',
            '$("#showpop").click();',
            '$("#close").on("click",function(){
              window.location.href ="../index.php";
            });',
            '</script>';
        
    }

    }

    



?>
