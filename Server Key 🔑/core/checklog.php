<?php

require_once './core/info.php'; 
require_once './core/pdo.php';

session_start();
$username = "";
$email = "";
$errors = [];
$trn_date = date("Y-m-d H:i:s");

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['password'])) {
        $errors['password'] = 'Enter the password';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (count($errors) === 0) {
      
        $query1 = "SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'";
        $result1 = mysqli_query($con,$query1);
        $rows1 = mysqli_num_rows($result1);
        $admin = mysqli_fetch_array($result1);
         
        if($rows1==1 || $rows==1){
            if($rows1==1 && $rows!=1){
                $_SESSION['ID'] = $admin['ID'];
                setcookie("userID", $admin['ID']);
                $_SESSION['message'] = 'You are logged in';
                $_SESSION['type'] = 'alert-success';
                $_SESSION['permision']=1;
                header('location:./admincp/index.php');
                }
        }else { // if password does not match
            $errors['login_fail'] = "Wrong username and password";
        }
        
    } else {
        $_SESSION['message'] = "error";
        $_SESSION['type'] = "alert-danger";
    }
}
?>