<?php 

      session_start();
    //  if(isset($_SESSION['aid'])){
    //      header('location:admin.php');
    //  }


    require '../dbcon.php';
 if( isset($_POST['user']) ){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $q = "SELECT `ID`, `Name`, `Gender` FROM `admin0` WHERE `UserName`='$user' AND `Pass`='$pass'";
        $res=mysqli_query($con,$q);

        $row = mysqli_num_rows($res);

        
        if($row < 1){
            $response = "Failed!";
            //header('location:index.php');
        }else{

            $response = "Success";
        
            $data = mysqli_fetch_assoc($res);

            $current_id= $data['ID'];
            $current_user= $data['Name'];

            echo "id :" .$current_id;
            echo "name: ".$current_user;

            $_SESSION['aid']=$current_id;   //new variable sid 
            $_SESSION['auser']=$current_user; 

           // header('Location:admin.php');
    }

        exit($response);
   }

?>