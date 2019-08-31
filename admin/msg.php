<?php 

    if(isset($_POST['key'])){
        require 'dbcon.php';
        $response = '<div class="Locations m-3">
        <h2 class="text-white">List of All Active Locations to Donate</h2><br>
        <div class="row mb-2 data-here">
        <table class="table table-striped text-white">
        <thead>
        <tr class="text-success mb-3">
        <th scope="col">SN</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile No</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">Message</th>
        </tr>
    </thead><tbody>';

        if($_POST['key'] == 'getMessages'){
            $query ="SELECT * from messages";
            $res=mysqli_query($con,$query);
            $count=1;
           while($data = mysqli_fetch_assoc($res)){
               
                $response.='
                    <tr>
                        <th scope="row">'.$count.'</th>
                        <td>'.$data['Name'].'</td>
                        <td>'.$data['Mob'].'</td>
                        <td>'.$data['Email'].'</td>
                        <td>'.$data['Date'].'</td>
                        <td><p>'.$data['Msg'].'</p></td>
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