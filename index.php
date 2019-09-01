<?php
  //update counter
  require 'dbcon.php';
  $q = "SELECT count from webcount where val='web'";
  $dres=mysqli_query($con,$q);
  $data = mysqli_fetch_assoc($dres);
  $n = $data['count'];
  $n +=1;
  $q2 = "UPDATE `webcount` SET `count`='$n' WHERE val='web'";
  $dres=mysqli_query($con,$q2);
  //$data = mysqli_fetch_assoc($dres);
?>

    <?php 
      include('assets/header.php');
    ?>
  
  <body onload="myfunction();">
  
<?php 
      include('assets/nav.php');
    ?>
   
    
    <div class="container-fluid">
        <div class="slider_wrapper">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-7">
                <div class="slider">
                  <div class="single-slide">
                    <img src="images/top-carousel1.jpg" alt="">
                  </div>
                  <div class="single-slide">
                    <img src="images/top-carousel2.jpg" alt="">
                  </div>
                  <div class="single-slide">
                    <img src="images/top-carousel3.jpg" alt="">
                  </div>
                  <div class="single-slide">
                    <img src="images/top-carousel4.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="donate-action text-center col-12 col-md-4 col-lg-5">
                <div class="firstAction">
                  <a href="donate" class="OneImage" ><img src="images/blood-blur-close-up-161628.jpg" alt=""><label><strong>Donate</strong> Blood</label></a>
                </div>
                <div class="secondAction">
                  <a href="locate.php" class="OneImage" ><img src="images/adult-blood-business-220723.jpg" alt=""><label><strong>Locate</strong> Blood</label></a>
                </div>
              </div>
            </div>
          </div>
          <!--  Funny Myths -->
      
          <section class="sectionTitle">
            <div class="backgroundTiltedRight"></div>
              <div class="col-xs-12 col-md-12 col-lg-12">
                <h2>Funny Myths about Blood donation</h2>
                <p>14 June is World Blood Donor Day. If you are still apprehensive about donating blood because you're afraid or 
                  convinced you won't be eligible, read on.</p>
                
                <div class="contentDivision">
                  
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="myth-slide-container row">
                                <div class="col-2"></div>
                                <div class="myth-data col-8">
                                  <br>
                                    <h4><span class="myth-que">Myth</span>&nbsp;Donating blood makes me feel weak.</h4>
                                    <p><span class="myth-que">Fact</span>&nbsp;<spam class="h5">&nbsp;NO, </spam> A healthy person can donate blood 
                                      four times a year with a minimum a 
                                      <b>3 months’ gap</b> between each blood donation. Feel free to donate blood regularly.</p>
                                  <br><br>
                                </div>
                                <div class="col-2"></div>
                              </div>
                            </div>
                          <div class="carousel-item">
                              <div class="myth-slide-container row">
                                  <div class="col-2"></div>
                                  <div class="myth-data col-8">
                                    <br>
                                      <h4><span class="myth-que">Myth</span>&nbsp;Donating blood frequently can fluctuate my blood pressure and blood sugar levels.</h4>
                                      <p><span class="myth-que">Fact</span>&nbsp;<spam class="h5">&nbsp;NO, </spam>the blood pressure and blood sugar
                                         levels do not fluctuate provided the pre-donation values are within normal limits.  A diabetic patient on insulin cannot donate 
                                         blood.</p>
                                    <br><br>
                                  </div>
                                  <div class="col-2"></div>
                                </div>
                          </div>
                          <div class="carousel-item">
                              <div class="myth-slide-container row">
                                  <div class="col-2"></div>
                                  <div class="myth-data col-8">
                                    <br>
                                      <h4><span class="myth-que">Myth</span>&nbsp;I am a retired person; I think I am  too old to donate blood.</h4>
                                      <p><span class="myth-que">Fact</span>&nbsp;<spam class="h5">&nbsp;YES, </spam>Donor must be 18 -60 years age and should have a minimum weight of 50 kgs.A donor can again donate blood after 3 months of the last donation.</p>
                                      <br><br>
                                  </div>
                                  <div class="col-2"></div>
                                </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                
              </div>
          </div>
      </section>
          <section class="sectionTitle">
            <div class="backgroundTiltedRight"></div>
              <div class="col-xs-12 col-md-12 col-lg-12">
                <h2>Why should we donate blood?</h2>
                <p>There are a huge number of people who need blood at any given time and the reasons may vary. People might need blood because:</p>
                
                <div class="contentDivision">
                <ul>
                  <li>
                    <span>1).</span>
                    <p>	The recipient may have been in a road accident, natural disaster, childbirth and lost huge amount of blood in these situations.</p>
                  </li>
                  <li>
                    <span>2).</span>
                    <p>A patient under surgery may need blood in case of sudden loss of blood or any medical complication.</p>
                  </li>
                  <li>
                    <span>3).</span>
                    <p>In case of certain liver ailments like Hepatitis C where there is destruction and regeneration of liver, platelet transfusion may be required.</p>
                  </li>
                  <li>
                    <span>4).</span>
                    <p>In case of certain liver ailments like Hepatitis C where there is destruction and regeneration of liver, platelet transfusion may be required.</p>
                  </li>
                  <li>
                    <span>5).</span>
                    <p>Cancer patients may require blood transfusion, especially when they are under chemotherapy (treatment which affects blood cells) or stem cell transplants. Many chemotherapy medicines and the disease itself can sometimes interfere with normal production of blood cells in the bone marrow.</p>
                  </li>
                </ul>
              </div>
          </div>
      </section>
      <div class="backgroundTiltedLeft_2"></div>
    </div>

    <?php
      include('assets/footer.php');
    ?>

      <!--Script Links-->

      <script src="js/main.js"></script>
      <script>
        $('.carousel').carousel({
          interval: 3000
        });
        $('.slider').slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        });
      </script>
    </body>
</html>
