<?php 

    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="Locations m-3">
        <h2 class="text-white">List of All Active Locations to Donate</h2><br>
        <div class="row mb-2 data-here">
        <table class="table table-striped text-white">
        <thead>
        <tr class="text-success mb-3">
        <th scope="col">S No.</th>
        <th scope="col">Active Address</th>
        <th scope="col">Available Doners</th>
        </tr>
    </thead><tbody>';

        if($_POST['key'] == 'getActiveLocations'){
            $query ="SELECT Address, COUNT(*) AS `num` FROM doners GROUP BY Address";
            $res=mysqli_query($con,$query);
            $count=1;
           while($data = mysqli_fetch_assoc($res)){
               
                $response.='
                    <tr>
                        <th scope="row">'.$count.'</th>
                        <td>'.$data['Address'].'</td>
                        <td>'.$data['num'].'</td>
                    </tr>
                ';
                $count++;
            }
        }

        $response.='</tbody>
        </table></div>';
        exit($response);
    }
?>