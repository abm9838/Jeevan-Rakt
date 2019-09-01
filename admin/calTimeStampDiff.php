<?php 
    function timeStampDiff($date1) {
    // Declare and define two dates 
    date_default_timezone_set("Asia/Kolkata");
    $currentTime = strtotime(Date('Y-m-d H:i:s')); 
    //echo $currentTime;
    
    $date1 = strtotime($date1); 
    //echo $date1;

    // Formulate the Difference between two dates 
    $diff = abs($currentTime - $date1); 


    // To get the year divide the resultant date into 
    // total seconds in a year (365*60*60*24) 
    $years = floor($diff / (365*60*60*24)); 


    // To get the month, subtract it with years and 
    // divide the resultant date into 
    // total seconds in a month (30*60*60*24) 
    $months = floor(($diff - $years * 365*60*60*24) 
                                / (30*60*60*24)); 


    // To get the day, subtract it with years and 
    // months and divide the resultant date into 
    // total seconds in a days (60*60*24) 
    $days = floor(($diff - $years * 365*60*60*24 - 
                $months*30*60*60*24)/ (60*60*24)); 


    // To get the hour, subtract it with years, 
    // months & seconds and divide the resultant 
    // date into total seconds in a hours (60*60) 
    $hours = floor(($diff - $years * 365*60*60*24 
        - $months*30*60*60*24 - $days*60*60*24) 
                                    / (60*60)); 


    // To get the minutes, subtract it with years, 
    // months, seconds and hours and divide the 
    // resultant date into total seconds i.e. 60 
    $minutes = floor(($diff - $years * 365*60*60*24 
            - $months*30*60*60*24 - $days*60*60*24 
                            - $hours*60*60)/ 60); 


    // To get the minutes, subtract it with years, 
    // months, seconds, hours and minutes 
    $seconds = floor(($diff - $years * 365*60*60*24 
            - $months*30*60*60*24 - $days*60*60*24 
                    - $hours*60*60 - $minutes*60)); 
    $final = $years." year";
    if($years <1){
        $final = $months." months";
        if($months <1){
            $final = $days." days";
            if($days <1){
                $final = $hours." hrs";
                if($hours <1){
                    $final = $minutes." min";
                    if($minutes <1){
                        $final = $seconds." sec";
                    }
                }
            }
        }
    }
    return $final;
 }


 function calcAge($a) {
    return date_diff(date_create($a), date_create(Date('Y-m-d')))->y;
}
function calPostTime($a){
    $date1=date_create($a);
    $date2=date_create(Date('Y-m-d'));
    $diff=date_diff($date1,$date2);
    return $diff->format("%a");
}

?>