<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
$_SESSION['time_start'] = date("Y-m-d H:i");
$settime="";
$status="pending";

if(isset($_POST['choose-time'])){ 
    $endtime= $_SESSION['time_start'];
    $selected=$_POST['choose-time'];

      if($selected=='1 days'){
          $endtime=date('Y-m-d H:i',strtotime('+1 day'));
           $save_option=$selected;
           $settime= "key days";
      }
      if($selected=='7 days'){
          $endtime=date('Y-m-d H:i',strtotime('+7 day'));
           $save_option=$selected;
           $settime= "key week";
      }
      if($selected=='14 days'){
          $endtime=date('Y-m-d H:i',strtotime('+14 day'));
           $save_option=$selected;
           $settime="key 2 week";
      }      
      if($selected=='30 days'){
          $endtime=date('Y-m-d H:i',strtotime('+30 day'));
           $save_option=$selected;
           $settime="key month";
      }       
      if($selected=='60 days'){
          $endtime=date('Y-m-d H:i',strtotime('+60 day'));
           $save_option=$selected;
           $settime="key 2 month";
      }      
      if($selected=='90 days'){
        $endtime=date('Y-m-d H:i',strtotime('+90 day'));
         $save_option=$selected;
         $settime="key 3 month";
    }
      if($selected=='182 days'){
          $endtime=date('Y-m-d H:i',strtotime('+182 day'));
           $save_option=$selected;
           $settime="key 6 month";
      }
      if($selected=='365 days'){
          $endtime=date('Y-m-d H:i',strtotime('+365 day'));
           $save_option=$selected;
           $settime="key year";
      }
}
    function keycreate()
    {
            $keylength=15;
            $str="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $randStr= substr(str_shuffle($str), 0, $keylength);
            return $randStr;      
    }
    
    
    if(isset($_POST['createkey']))
        {  
          
          if(isset($_POST['tag'])){
            $_SESSION['tag']=$_POST['tag'];
          }
          $_SESSION['settime']=$settime;
          $_SESSION['time_end']=$endtime;
          if (!(isset($_SESSION['key']))){
            $key=keycreate();
            $_SESSION['key']=$_SESSION['tag'].$key;
            $_SESSION['firstkey']=1;
          }   
          header( 'Location: ../admincp/createkey.php' ) ;
          return;
        }
        if (isset($_SESSION['firstkey']) && isset($_SESSION['key'])){

          echo "<center>";
          echo "<p>Key Created:</p>";          
          echo "<p>".$_SESSION['key']."</p>";
          echo "</center>";

        }
    if(isset($_POST['Deletekey']))
    { 
      unset($_SESSION['firstkey']);
      unset($_SESSION['key']);
      header( 'Location: ../admincp/creat.php' ) ;
      return;
    }
   
    /* insert database */
     if((isset($_POST['savekey'])) && (isset($_SESSION['key'])))
       {  
            
             $old_key=$_SESSION['key'];
             $sql = "SELECT * FROM `get_key` WHERE all_key = '$old_key' ";
             $bien = mysqli_query($con,$sql);
             $rowkey = mysqli_num_rows ($bien);
             if ($rowkey > 0)
              {
                echo '<script>alert("This Key already created")</script>';
                header( 'Location: ../admincp/creat.php' ) ;
                return;
              } 
            $my_Insert_Statement = $pdo->prepare("INSERT INTO get_key (all_key,set_time,status) VALUES (:my_key,:set_time,:status)");
            $my_Insert_Statement->bindParam(':my_key', $_SESSION['key']);
           
            $my_Insert_Statement->bindParam(':set_time', $_SESSION['settime']);
            $my_Insert_Statement->bindParam(':status', $status);
            if ($my_Insert_Statement->execute()) {
              unset($_SESSION['key']);
              unset($_SESSION['time_end']);
              $_POST['choose-time']=$save_option;
            } else {
              echo "Unable to Save";
            }
            header( 'Location: ../admincp/creat.php' ) ;
            return;
           }          

          
?>
 