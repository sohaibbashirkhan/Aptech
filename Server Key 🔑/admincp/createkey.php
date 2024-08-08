<?php
session_start();

if (empty($_SESSION['ID'])) {
    header('location: ../login.php');
}
require_once '../core/info.php'; 
require_once '../core/pdo.php';



require_once '../layout/header.php';
?>



        <!-- Topbar -->
        <!-- Container Fluid -->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Key</h1>
            
          </div>

          <!-- row -->
<center>
            <div class="col-lg-6">

              <!-- Sizing Buttons -->
              <div class="card mb-4">
                <div class="card-header py-3">
                 <center><h3 class="m-0 font-weight-bold text-primary">CREATE KEY
</h3></center>
<hr>
                </div>
                <div class="card-body">
   <!-- Earnings (Annual) Card Example -->
              <div class="card ">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php

require_once '../core/info.php'; 
require_once '../core/pdo.php';

require_once '../core/create.php';

          if (empty($_SESSION['ID'])) {
            header('location: ../log.php');
          }
          ?>
                      </div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>

<br>

 <form name="Create" action="" method="post">
            <input class="form-control" type="text" name="tag" placeholder="Put text" value="PJ-X2N-DN-HLQ-" class="input">
            <div class="select is-rounded is-info is-fullwidth">
            <div class="select-time">
              <select class="form-control" name="choose-time">
                <option value="1 days">1 Day</option>
                <option value="7 days">1 Week</option>
                <option value="14 days">2 Week</option>    
                <option value="30 days">1 Month</option>
                <option value="60 days">2 Months</option>  
                <option value="90 days">3 Months</option>                                            
                <option value="182 days">6 Months</option>
                <option value="365 days">1 Year</option>
              </select>
            </div>
            </div>
<br>

<div class="box-header danger">
<center>
              <input type="submit" class="btn btn-primary" name="createkey" name="savekey"  name="savekey" value="Get" />==>
              <input type="submit" class="btn btn-primary" name="savekey" value="Show" />==>
             
             <input type="submit" class="btn btn-primary" name="savekey" value="Save" />
<center>
</div>
<br>
<center>
<input type="submit" class="btn btn-danger" name="Deletekey" value="Re-create" />
</center>
          </form>
        </div>
      </div>
        </div>

    
                 </center>
             
              
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
 