<?php

session_start();

require_once './core/checklog.php';

require_once './core/info.php'; 
require_once './core/pdo.php';

?>
<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://s1.uphinh.org/2021/05/27/808422AC-8EF6-4C27-AFA9-6B05DE3106CC.png" rel="icon">
  <title>NGUYENNAM - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                  <img src="https://s1.uphinh.org/2021/05/27/808422AC-8EF6-4C27-AFA9-6B05DE3106CC.png"alt="" width="100" height="100">

                    <h1 class="h4 text-gray-900 mb-4">LOGIN PANEL</h1>
                  </div>
                  <?php if (count($errors) > 0): ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
              <?php echo $error; ?>
            <?php endforeach;?>
          </div>
        <?php endif;?>
                  <form class="user" action="login.php" method="post">
                    <div class="form-group">
<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                                <button type ="submit" name="login-btn" class="btn btn-primary btn-block">Login</button>
                    </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>