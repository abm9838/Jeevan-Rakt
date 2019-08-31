<?php 

    require 'calTimeStampDiff.php';
    

    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="doner">
        <h2 class="text-white">List of Active Doners</h2><br>
        <div class="row mb-2 data-here">';

        if($_POST['key'] == 'getDoner'){
            $query ="SELECT * from doners";
            $res=mysqli_query($con,$query);
           while($data = mysqli_fetch_assoc($res)){
                $age = calcAge($data['DOB']);

                $Showname = '<strong class="d-inline-block mb-2 text-success">'.$data['Name'].'
                <img src="../images/green-tick.png" height="20" width="20"></strong>';

                $button = '<button type="submit" id="deActivateUserButton" class="btn btn-sm btn-danger mt-1">
                <input class="val" value="'.$data['Id'].'" style="display:none;">Deactivate</button>';

                $script = '<script>
                $(document).ready(function() {
    
                    $("#activateUserButton").click(function (){
                        var val = this.firstElementChild.value;
                        console.log("Trying to activate..."+val);
                        //alert(val);
                        var varData = \'Id=\'+val;
            
                        $.ajax({
                            type : \'POST\',
                            url : \'activate.php\',
                            data : varData,
                            success : function(res){
                                alert(res);
                            }
                        });
                    });
    
                    $("#deActivateUserButton").click(function (){
                        var val = this.firstElementChild.value;
                        console.log("Trying to deactivate..."+val);
                        //alert(val);
                        var varData = \'Id=\'+val;
            
                        $.ajax({
                            type : \'POST\',
                            url : \'deactivate.php\',
                            data : varData,
                            success : function(res){
                                alert(res);
                            }
                        });
                    });
                });
                    
                </script>';

                if($data['Active']=='N'){
                    $button = ' <button type="submit" id="activateUserButton" class="btn btn-sm btn-success mt-1">
                    <input class="val" value="'.$data['Id'].'" style="display:none;">Activate</button>';
                    $Showname = '<strong class="d-inline-block mb-2 text-danger">'.$data['Name'].'</strong>';
                    
                    
                }
                if($age<18){
                    $button = ' <button type="submit" id="BelowAgeButton" class="btn btn-sm btn-danger mt-1" disabled>Below Age</button>';
                }else if($age>=60){
                    $button = ' <button type="submit" id="aboveAgeButton" class="btn btn-sm btn-danger mt-1" disabled>Above Age</button>';
                
                }
                $response.='
                <!--User 1-->
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    '.$Showname.'
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
                    <a href="#"><small class="text-success">'.timeStampDiff($data['LastPostDate']).' ago</small></a>
                    <!--available only when auto inform is disabled
                once sended update "sent" color-"Green"
            -->
                   '.$button.'
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="'.$data['Img'].'" data-holder-rendered="true">
            </div>
        </div>
        <!---->';
            }
        }

        $response.='</div></div>'.$script.'';

        
        
        exit($response);
    }
?>