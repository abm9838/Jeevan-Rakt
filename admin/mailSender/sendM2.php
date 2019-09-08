<?php

    require '../../dbcon.php';
    require 'PHPMailerAutoload.php';
   
  if(isset($_POST['Id'])){
    $LocatorId = $_POST['Id'];
    
    // Edit below two line for activating emails services
    //It is necessary
    // $senderEmail = 'YOUR EMAIL HERE';
    // $senderEmailPass = 'YOUR PASS HERE';

    $q = "SELECT * from locators where Id='".$LocatorId."' ";
    $res=mysqli_query($con,$q);
    $data = mysqli_fetch_assoc($res);
    $locAdd = $data['Address'];
    $locBGr = $data['BloodGr'];
    $locName = $data['Name'];
    
    //retrieve data from fonator
    $dquery ="SELECT * from doners WHERE `Active`='Y' AND `Address`='".$locAdd."' AND `BloodGr`='".$locBGr."'";
    if($locBGr=="AB+"){
      //From All
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."'";
    }else if($locBGr=="O+"){
      //From O+ O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND (`BloodGr`='O+' OR `BloodGr`='O-') ";
    }else if($locBGr=="A+"){
      //From A+ A- O+ O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND (`BloodGr`='O+' OR `BloodGr`='O-' OR `BloodGr`='A+' OR `BloodGr`='A-') ";
    }else if($locBGr=="B+"){
      //From B+ B- O+ O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND (`BloodGr`='O+' OR `BloodGr`='O-' OR `BloodGr`='B+' OR `BloodGr`='B-')";
    }else if($locBGr=="O-"){
      //From O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND `BloodGr`='O-'";
    }else if($locBGr=="A-"){
      //From A- O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND (`BloodGr`='A-' OR `BloodGr`='O-')";
    }else if($locBGr=="B-"){
      //From B- O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND WHERE `Address`='".$locAdd."' AND (`BloodGr`='B-' OR `BloodGr`='O-')";
    }else if($locBGr=="AB-"){
      //From AB- A- B- O-
      $dquery ="SELECT * from doners WHERE `Active`='Y' AND  WHERE `Address`='".$locAdd."' AND (`BloodGr`='A-' OR `BloodGr`='O-' OR `BloodGr`='AB-' OR `BloodGr`='B-')";
    }
    
    $dres=mysqli_query($con,$dquery);
    $count=0;
    while($ddata = mysqli_fetch_assoc($dres)){
        $sName =$ddata['Name'];
        $sEmail= $ddata['Email'];
        $sAdd = $ddata['Address'];
        
        //Mail configuration
        $mail = new PHPMailer();

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mail';                 // SMTP username
        $mail->Password = 'Pass';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
            
        $mail->setFrom('jeevanrakt@gmail.com', 'JeevanRakt Admin');
        $mail->addAddress($sEmail, $sName);     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'A person needs blood in your City '.$sAdd;

        $mail->Body    = '<style type="text/css">
        body,
        html, 
        .body {
          background: #f3f3f3 !important;
        }
        
        .container.header {
          background: #f3f3f3;
        }
        
        .body-drip {
          border-top: 8px solid #663399;
        }
        .mr{
            margin-left: 5%;
            margin-right: 5%;
        }
        </style>
        
        <spacer size="16"></spacer>
        
        <container class="header mr">
        <row class="collapse">
          <columns>
            <hr><br>
          </columns>
        </row>
        </container>
        
        <container class="body-drip mr">
        
        
        <center>
          <img src="https://jeevan-rakt.000webhostapp.com/images/logo.png" alt="">
        </center>
        
        <spacer size="16"></spacer>
        <br><br>
        <row>
          <columns>
            <h4 class="text-center">Dear '.$sName.'</h4>
            <p class="text-center">Place - '.$sAdd.' <!-- | ~567KM --></p>
          </columns>
        </row>
        
        <hr/>
        
        <row>
          <columns>
            <p class="text-center">Hi! <b>'.$sName.'</b>, we are thankful for your intereset in donating blood. as for your kind information
                a person named as <b>'.$locName.'</b> in your location <b>'.$sAdd.'</b> needs blood very Urgent. We request you please help him. Few drops 
                of your blood can save someones life.
                </p><br>
            <center>
              <a href="https://jeevan-rakt.000webhostapp.com/locate?'.$sAdd.'" class="success">Inform him now</a>
            </center>
            <p class="text-center"><i>We are very thankful for your support. for more information please visit 
                <a href="https://jeevan-rakt.000webhostapp.com">Jeevan Rakt</a></i></p>
          </columns>
        </row>
        
        <row class="collapsed footer">
          <columns>
            <spacer size="16"></spacer>
            <p class="text-center">Thankyou! Team Jeevan-Rakt<br/>
            <center>
              <menu>
                <item><p class="text-center"><a href="https://jeevan-rakt.000webhostapp.com">Jeevan Rakt &copy;2019</a></item>
              </menu>
            </center>
          </columns>
        </row>
        
        </container>';
        if(!$mail->send()) {
           // echo ($count+1)."-Failed! Message could not send to - ".$ddata['Email']."\n";
            //echo ($count+1)."-Mailer Error: " . $mail->ErrorInfo."\n";
        } else {
            $count++;
            echo $count."- Message send to - ".$ddata['Email']."\n";
        }
        
    }//end While
    
    echo $count;
    echo "\nFor ".$locName."\n";

    if($count==0){
      echo "Sorry! No Person found, who can donate for Blood Gr. ".$locBGr." in ".$locAdd;
    }else{
      echo $count." people receive the msg"."\n";
      date_default_timezone_set("Asia/Kolkata");
      $date = Date('Y-m-d H:i:s'); 

      //Update TimeStamp
      $infQuery = "UPDATE `locators` SET `informStatus`='$date' WHERE `Id`='$LocatorId'";
      if (mysqli_query($con, $infQuery)) {
        echo "";
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
    }


}

?>
