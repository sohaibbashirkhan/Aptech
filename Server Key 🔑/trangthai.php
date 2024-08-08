<?php
session_start();

include("./core/info.php");
include("./core/pdo.php");
$status="Active";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$_SESSION['time_start'] = date("Y-m-d H:i");
$time=$_SESSION['time_start'] ;
$endtime=date('Y-m-d H:i',strtotime('+1 day'));
if(isset($_GET['key'])){
    $key = $_GET['key'];
    $UDID= $_GET['udid'];

    $sql = "SELECT * FROM get_key WHERE all_key='$key' LIMIT 1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $key=$user['all_key'];
        $settime=$user['set_time'];
        if($settime=="key days"){
            $endtime=date('Y-m-d H:i',strtotime('+1 day')); 
            $_SESSION['end_time']  =$endtime;
        }
        if($settime=="key week"){
            $endtime=date('Y-m-d H:i',strtotime('+7 day'));
            $_SESSION['end_time']  =$endtime;   
        }
        if($settime=="key 2 week"){
            $endtime=date('Y-m-d H:i',strtotime('+14 day')); 
            $_SESSION['end_time']  =$endtime;
        }
        if($settime=="key month"){
            $endtime=date('Y-m-d H:i',strtotime('+30 day')); 
            $_SESSION['end_time']  =$endtime;
        }
        if($settime=="key 2 month"){
            $endtime=date('Y-m-d H:i',strtotime('+60 day')); 
            $_SESSION['end_time']  =$endtime;
        }
        if($settime=="key 3 month"){
            $endtime=date('Y-m-d H:i',strtotime('+90 day')); 
            $_SESSION['end_time']  =$endtime;
        }
        if($settime=="key 6 month"){
            $endtime=date('Y-m-d H:i',strtotime('+182 day'));
            $_SESSION['end_time']  =$endtime; 
        }
        if($settime=="key year"){
            $endtime=date('Y-m-d H:i',strtotime('+365 day'));
            $_SESSION['end_time']  =$endtime;
        }
        $check_UDID=$user['UDID'];
        $check_status=$user['status'];
        if($check_UDID=='' && $check_status=="pending"){
            $endtime= $_SESSION['end_time'];
            $query = "UPDATE get_key SET UDID='$UDID', start_time='$time', end_time='$endtime', status='$status' WHERE all_key='$key'";
            if(mysqli_query($con,$query)){
                $sql = "SELECT * FROM get_key WHERE all_key='$key' LIMIT 1";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $user = mysqli_fetch_assoc($result);
                    $uuid= $user['UDID'];
                    $myArr= array(

                        "status"    => "true",   
                                                 "uuid"      => $uuid,     
                    );
                    $myJSON = json_encode($myArr);
                    echo $myJSON;
                }else{

                }
            }
        }else{

                if($check_UDID=='' && $check_status=="Active"){
                    $query = "UPDATE get_key SET UDID='$UDID' WHERE all_key='$key'";
                    if(mysqli_query($con,$query)){
                        $sql = "SELECT * FROM get_key WHERE all_key='$key' LIMIT 1";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $user = mysqli_fetch_assoc($result);
                            $uuid= $user['UDID'];
                            $myArr= array(
                                                    "status"    => "true",   
                                                 "uuid"      => $uuid,     
                            );
                            $myJSON = json_encode($myArr);
                            echo $myJSON;
                        }else{

                        }
                    }
                
                }else{

                        $sql = "SELECT * FROM get_key WHERE all_key='$key' LIMIT 1";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $_SESSION['time_start'] = date("Y-m-d H:i");
                            $time=$_SESSION['time_start'] ;
                            $user = mysqli_fetch_assoc($result);
                            $endtime=$user['end_time'];
                            $uuid= $user['UDID'];
                            if(($time<$endtime) && ($uuid==$UDID)){
                                $myArr= array(
                            "status"    => "true",   
                                                 "uuid"      => $uuid,     
                                );
                                $myJSON = json_encode($myArr);
                                echo $myJSON;
                            }else{

                            }
                        
                        }
                }

        
            
        }
        
    }else{
        $sql = "SELECT * FROM key_free WHERE key_free='$key' LIMIT 1";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $key=$user['key_free'];
            $check_UDID=$user['UDID'];
            $endtime=date('Y-m-d H:i',strtotime('+6 hour'));
            if($check_UDID==''){
                $query = "UPDATE key_free SET UDID='$UDID',start_time='$time', end_time='$endtime', status='$status' WHERE key_free='$key'";
                if(mysqli_query($con,$query)){
                    $sql = "SELECT * FROM key_free WHERE key_free='$key' LIMIT 1";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $user = mysqli_fetch_assoc($result);
                        $uuid= $user['UDID'];
                        $myArr= array(
                                                   "status"    => "true",   
                                                 "uuid"      => $uuid,            
                        );
                        $myJSON = json_encode($myArr);
                        echo $myJSON;
                    }else{
                        
                    }
                }
            }else{
                $sql = "SELECT * FROM key_free WHERE key_free='$key' LIMIT 1";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['time_start'] = date("Y-m-d H:i");
                    $time=$_SESSION['time_start'] ;
                    $user = mysqli_fetch_assoc($result);
                    $endtime=$user['end_time'];
                    $uuid= $user['UDID'];
                    if(($time<$endtime) && ($uuid==$UDID)){
                        $myArr= array(
                                             "status"    => "true",   
                                                 "uuid"      => $uuid,     
                        );
                        $myJSON = json_encode($myArr);
                        echo $myJSON;
                    }else{

                    }
                
                }
            }     
        }
  }
}      
?>
