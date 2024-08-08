<?php
session_start();

require_once './core/info.php'; 
require_once './core/pdo.php';



require_once './layout/header1.php';
?>

 <!-- Container Fluid -->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">HOMEPAGE</h1>

          </div>

          <!-- row -->
          <div class="row">
          
<?php 
$pagetype='aboutus0';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
            <div class="col-lg-6">
              <!-- Sizing Buttons -->
              <div class="card mb-4">
                <div class="card-header py-3">
                 <center><h3 class="m-0 font-weight-bold text-primary"><?php echo htmlentities($row['PageTitle'])?></h3></center>
            <hr>

                </div>
                <div class="card-body">
                 
                 
                 
                 <!-- Page Content -->
    <div class="container">
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->  
                 
                 
                 
                 
                  
                </div>
              </div>
              <!-- Brand Buttons -->
              <?php 
$pagetype='aboutus1';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
              <div class="card mb-4">
                <div class="card-header py-3">
                  <center><h3 class="m-0 font-weight-bold text-primary"><?php echo htmlentities($row['PageTitle'])?></h3></center>
                  <hr>
                </div>
                <div class="card-body">
                  
                  
                  
                     
                 <!-- Page Content -->
    <div class="container">
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->  
                 
                 
               
                  
                  
                  
                </div>
              </div>
            </div>
            
 <?php 
$pagetype='aboutus2';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>            
            
            <!-- Split Buttons with Icon -->
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3">
                   <center><h3 class="m-0 font-weight-bold text-primary"><?php echo htmlentities($row['PageTitle'])?></h3></center>
                  <hr>
                </div>
                <div class="card-body">
                 
                 
                     
                     
                 <!-- Page Content -->
    <div class="container">
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->  
                 
                 
                 
                 
                 
                </div>
              </div>
              
            </div>
          </div>
          <!-- Row -->
         

         
          
        </div>
        <!-- Container Fluid -->
      </div>

<?php
require_once './layout/footer.php';
?>
 