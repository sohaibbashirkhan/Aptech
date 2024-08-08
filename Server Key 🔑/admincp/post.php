<?php
session_start();

if (empty($_SESSION['ID'])) {
    header('location: ../login.php');
}
require_once '../core/info.php'; 
require_once '../core/pdo.php';



require_once '../layout/header.php';




?>

<?php
if(isset($_POST['update0']))
{
$pagetype='aboutus0';
$pagetitle=$_POST['pagetitle0'];
$pagedetails=$_POST['pagedescription0'];

$query=mysqli_query($con,"update tblpages set PageTitle='$pagetitle',Description='$pagedetails' where PageName='$pagetype' ");
if($query)
{
$msg="About us  page successfully updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

?>

      <!-- Container Fluid -->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Post</h1>
            
          </div>

          <!-- row -->
          <div class="row">

            <div class="col-lg-6">
              <!-- Sizing Buttons -->
              <div class="card mb-4">
                <div class="card-header py-3">
                 <center><h3 class="m-0 font-weight-bold text-primary">News</h3></center>
                  <hr>
                </div>
                <div class="card-body">
                 
                 
               <div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>
<?php 
$pagetype='aboutus0';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="aboutus" method="post">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Page Title</label>
<input type="text" class="form-control" id="pagetitle0" name="pagetitle0" value="<?php echo htmlentities($row['PageTitle'])?>"  required>
</div>


     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<label for="pagedescription0">Page Details</label>
<textarea class="form-control" name="pagedescription0"  required><?php echo htmlentities($row['Description'])?></textarea>
</div>
</div>
</div>
<?php } ?>
<br>
<button type="submit" name="update0" class="btn btn-success waves-effect waves-light">Update and Post</button>

                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                 
                 
                  
                </div>
              </div>
              
<?php
if(isset($_POST['update1']))
{
$pagetype='aboutus1';
$pagetitle=$_POST['pagetitle1'];
$pagedetails=$_POST['pagedescription1'];

$query=mysqli_query($con,"update tblpages set PageTitle='$pagetitle',Description='$pagedetails' where PageName='$pagetype' ");
if($query)
{
$msg="About us  page successfully updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

?>              
              
              
              
              
              <!-- Brand Buttons -->
              <div class="card mb-4">
                <div class="card-header py-3">
                 <center><h3 class="m-0 font-weight-bold text-primary">News 1</h3></center>
                  <hr>

                </div>
                <div class="card-body"> 
                 
                 
               <div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>
<?php 
$pagetype='aboutus1';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="aboutus" method="post">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Page Title</label>
<input type="text" class="form-control" id="pagetitle1" name="pagetitle1" value="<?php echo htmlentities($row['PageTitle'])?>"  required>
</div>


     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<label for="pagedescription1">Page Details</label>
<textarea class="form-control" name="pagedescription1"  required><?php echo htmlentities($row['Description'])?></textarea>
</div>
</div>
</div>
<?php } ?>
<br>
<button type="submit" name="update1" class="btn btn-success waves-effect waves-light">Update and Post</button>

                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                </div>
              </div>
            </div>
            
            
 <?php
if(isset($_POST['update2']))
{
$pagetype='aboutus2';
$pagetitle=$_POST['pagetitle2'];
$pagedetails=$_POST['pagedescription2'];

$query=mysqli_query($con,"update tblpages set PageTitle='$pagetitle',Description='$pagedetails' where PageName='$pagetype' ");
if($query)
{
$msg="About us  page successfully updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

?>              
            <!-- Split Buttons with Icon -->
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <center><h3 class="m-0 font-weight-bold text-primary">News 2</h3></center>
                  <hr>
                </div>
                <div class="card-body">
                 
                 
                 
                                  
               <div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>
<?php 
$pagetype='aboutus2';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="aboutus" method="post">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Page Title</label>
<input type="text" class="form-control" id="pagetitle2" name="pagetitle2" value="<?php echo htmlentities($row['PageTitle'])?>"  required>
</div>


     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<label for="pagedescription2">Page Details</label>
<textarea class="form-control" name="pagedescription2"  required><?php echo htmlentities($row['Description'])?></textarea>
</div>
</div>
</div>
<?php } ?>
<br>
<button type="submit" name="update2" class="btn btn-success waves-effect waves-light">Update and Post</button>

                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                 
                 
                </div>
              </div>
              
            </div>
            
          </div>
          
          <!-- Row -->
         


          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- Container Fluid -->
      </div>
       
      <br>
      
<?php
require_once '../layout/footer.php';
?>
 