<?php 


    function calcAge($a) {
        return date_diff(date_create($a), date_create(Date('Y-m-d')))->y;
    }
    function calPostTime($a){
        $date1=date_create($a);
        $date2=date_create(Date('Y-m-d'));
        $diff=date_diff($date1,$date2);
        return $diff->format("%a");
       
    }

    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="history">
        <h2 class="text-white">History of Donations</h2><br>
        <div class="row mb-2 data-here">';

        if($_POST['key'] == 'getHistory'){
            $query ="SELECT * from history";
            $res=mysqli_query($con,$query);
            $count=1;
           while($data = mysqli_fetch_assoc($res)){
           // "UPDATE table SET commodity_quantity=$ WHERE ur='".$rows['user']."' "
               $donerQuery = "SELECT * from doners where Id='".$data['DonerId']."'";
               $dres=mysqli_query($con,$donerQuery);
               $ddata = mysqli_fetch_assoc($dres);
                $age = calcAge($ddata['DOB']);
                $response.='
                <!--User 1-->
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success"><span
                    class="badge badge-success badge-pill">'.$count.'</span> - '.$ddata['Name'].'</strong>
                    <h3 class="mb-0">
                        <!-- RED for Locators-->
                        <!-- GREEN for Doners-->
                        <a class="text-success" href="#">'.$ddata['BloodGr'].'</a>
                    </h3>
                    <div class="mb-1 text-muted">'.$ddata['Address'].'&nbsp;<img src="../images/location-red.png" width="15px"
                            height="20px" alt="">
                    </div>
                    <p class="card-text mb-auto">
                        '.$age.' Yrs<br><small>'.$ddata['AditionalDetails'].'</small></p>
                    <a href="#"><small>'.calPostTime($data['Date']).' Days ago at '.$data['Place'].'</small></a>
                    <!--available only when auto inform is disabled
                once sended update "sent" color-"Green"
            -->
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="'.$ddata['Img'].'" data-holder-rendered="true">
            </div>
        </div>
        <!---->';


        //User 2

       // $LocatorQuery = "SELECT * from locators where Id=$data['LocatorId']";
        $LocatorQuery = "SELECT * from locators where Id='".$data['LocatorId']."'";
        $lres=mysqli_query($con,$LocatorQuery);
        $ldata = mysqli_fetch_assoc($lres);
         $lage = calcAge($ldata['DOB']);
         $response.='
         <!--User 1-->
 <div class="col-md-6">
     <div class="card flex-md-row mb-4 box-shadow h-md-250">
         <div class="card-body d-flex flex-column align-items-start">
             <strong class="d-inline-block mb-2 text-danger"><span
             class="badge badge-danger badge-pill">'.$count.'</span> - '.$ldata['Name'].'</strong>
             <h3 class="mb-0">
                 <!-- RED for Locators-->
                 <!-- GREEN for Doners-->
                 <a class="text-danger" href="#">'.$ldata['BloodGr'].'</a>
             </h3>
             <div class="mb-1 text-muted">'.$ldata['Address'].'&nbsp;<img src="../images/location-red.png" width="15px"
                     height="20px" alt="">
             </div>
             <p class="card-text mb-auto">
                 '.$lage.' Yrs<br><small>'.$ldata['AditionalDetails'].'</small></p>
             <a href="#"><small><span class="badge badge-danger badge-pill">'.$data['Amount'].'</span></small></a>
             <!--available only when auto inform is disabled
         once sended update "sent" color-"Green"
     -->
         </div>
         <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
             alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
             src="'.$ldata['Img'].'" data-holder-rendered="true">
     </div>
 </div>
 <!---->';

 $count++;


            }
        }

        $response.='</div></div>';
        exit($response);
    }
?>