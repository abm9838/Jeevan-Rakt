<?php 
 
    require 'calTimeStampDiff.php';
    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="users">
        <h2 class="text-white mt-2">List of All Registered members</h2><br>
        <div class="row mb-2 data-here">';

        if($_POST['key'] == 'getRegUsers'){
            $query ="SELECT * from locators";
            $res=mysqli_query($con,$query);
           while($data = mysqli_fetch_assoc($res)){
                $age = calcAge($data['DOB']);
                $response.='
                <!--User 1-->
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">'.$data['Name'].'</strong>
                    <h3 class="mb-0">
                        <!-- RED for Locators-->
                        <!-- GREEN for Doners-->
                        <a class="text-danger" href="#">'.$data['BloodGr'].'</a>
                    </h3>
                    <div class="mb-1 text-muted">'.$data['Address'].'&nbsp;<img src="../images/location-red.png" width="15px"
                            height="20px" alt="">
                    </div>
                    <p class="card-text mb-auto">
                        '.$age.' Yrs old<br><small>'.$data['AditionalDetails'].'</small></p>
                    <a href="#"><small class="text-success">Registered '.timeStampDiff($data['LastPostDate']).' ago</small></a>
                    <!--available only when auto inform is disabled
                once sended update "sent" color-"Green"
            -->
                  <!--  <button type="submit" class="btn btn-sm btn-danger mt-1">Infrom</button>-->
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="'.$data['Img'].'" data-holder-rendered="true">
            </div>
        </div>
        <!---->';
            }
        //Fetch Doners list
            $query ="SELECT * from doners";
            $res=mysqli_query($con,$query);
           while($data = mysqli_fetch_assoc($res)){
                $age = calcAge($data['DOB']);
                $response.='
                <!--User 1-->
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">'.$data['Name'].'</strong>
                    <h3 class="mb-0">
                        <!-- RED for Locators-->
                        <!-- GREEN for Doners-->
                        <a class="text-success" href="#">'.$data['BloodGr'].'</a>
                    </h3>
                    <div class="mb-1 text-muted">'.$data['Address'].'&nbsp;<img src="../images/location-red.png" width="15px"
                            height="20px" alt="">
                    </div>
                    <p class="card-text mb-auto">
                        '.$age.' Yrs old<br><small>'.$data['AditionalDetails'].'</small></p>
                    <a href="#"><small class="text-success">Regestered '.timeStampDiff($data['LastPostDate']).' ago</small></a>
                    <!--available only when auto inform is disabled
                once sended update "sent" color-"Green"
            -->
                  <!--  <button type="submit" class="btn btn-sm btn-danger mt-1">Modify</button>-->
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="'.$data['Img'].'" data-holder-rendered="true">
            </div>
        </div>
        <!---->';
            }
        }

        $response.='</div></div>';
        exit($response);
    }
?>