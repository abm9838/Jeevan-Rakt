<?php 

    require 'calTimeStampDiff.php';
    
    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="locators">
        <h2 class="text-white">List of people who needs blood</h2><br>
        <div class="row mb-2 data-here">';

        if($_POST['key'] == 'getUrgent'){
            $query ="SELECT * from locators WHERE Active='Y' AND Urgent='Y'";
            $res=mysqli_query($con,$query);
           while($data = mysqli_fetch_assoc($res)){
                $age = calcAge($data['DOB']);
                $informStatus = $data['informStatus'];
                $class = "danger";
                $informStatusf='';
                $informStatusText = "inform now";
                $showName = '<strong class="d-inline-block mb-2 text-primary">'.$data['Name'].'</strong>';
                if($informStatus!="0000-00-00 00:00:00"){
                    $informStatusf='informed <b>'.timeStampDiff($informStatus).'</b> ago';
                    $class = "success";
                    $informStatusText = "informed";
                    $showName = '<strong class="d-inline-block mb-2 text-primary">'.$data['Name'].'
                    <img src="../images/green-tick.png" height="20" width="20"></strong>';
                }
                $response.='
                <!--User 1-->
        <div class="col-md-6 pr-sm-0 col-sm-8 user-profile">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    '.$showName.'
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
                    <a href="#"><small class="text-success">Registerd '.timeStampDiff($data['RegDate']).' ago</small></a>
                    <!--available only when auto inform is disabled
                once sended update "sent" color-"Green"
            -->     
            
            </p>
                     
                    <button type="submit" class="btn btn-sm btn-'.$class.' mt-1 send">
                    <input class="val" value="'.$data['Id'].'" style="display:none;">'.$informStatusText.'</button>
                    <p><small>'.$informStatusf.'</small></p>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="'.$data['Img'].'" data-holder-rendered="true">
            </div>
        </div>
        
        <!---->';
            }
        
        }

        $response.='</div></div><script>
        $(document).ready(function() {

            $(".send").click(function (){
                 var val = this.firstElementChild.value;
                 console.log("Trying to send Msg..."+val);
                 //alert(val);
                 var varData = \'Id=\'+val;
                var preData = this;
                this.innerHTML = "<img src=\'../images/sending.gif\' height=\'30px\' width=\'50px\'>";
                 $.ajax({
                     type : \'POST\',
                     url : \'mailSender/sendM2.php\',
                     data : varData,

                     beforeSend : function(){
                        this.textContent = "sending...";
                     },
                     complete : function(){
                        // preData.innerHTML = "Informed";
                     },
                     error : function(){
                        //Error 
                            preData.innerHTML = "Error!";
                             preData.classList.remove("btn-success");
                             preData.classList.remove("btn-danger");
                             preData.classList.add("btn-danger");
                     },
                     success : function(res){
                         if(res[0]>0){
                             //message sent for some people
                             preData.innerHTML = "Informed";
                             preData.classList.remove("btn-success");
                             preData.classList.remove("btn-danger");
                             preData.classList.add("btn-success");
                             
                         }else{
                             //No people found
                             preData.innerHTML = "No Doner";
                             preData.classList.remove("btn-success");
                             preData.classList.remove("btn-danger");
                             preData.classList.add("btn-danger");
                         }
                         
                         alert(res);
                         console.log(res[0]);
                     }
                 });
            });
        });
            
        </script>';
        exit($response);
    }
?>