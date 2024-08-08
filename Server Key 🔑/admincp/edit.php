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
            <h1 class="h3 mb-0 text-gray-800">Edit Key </h1>
            
          </div>

 <?php

include("../core/info.php");
include("../core/pdo.php");

$msg = '';

if (isset($_GET['ID'])) {

    if (!empty($_POST)) {

        $ID = isset($_POST['ID']) ? $_POST['ID'] : NULL;
        $all_key = isset($_POST['all_key']) ? $_POST['all_key'] : '';
        $start_time = isset($_POST['start_time']) ? $_POST['start_time'] : '';
        $end_time = isset($_POST['end_time']) ? $_POST['end_time'] : '';
        $UDID = isset($_POST['UDID']) ? $_POST['UDID'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE get_key SET ID = ?, all_key = ?, start_time = ?, UDID= ?,end_time=?,status=? WHERE ID = ?');
        $stmt->execute([$ID, $all_key, $start_time,$UDID,$end_time,$status, $_GET['ID']]);
        $msg = '<script type="text/javascript">
            window.location.href = "../admincp"
        </script>';
        header('location: ../admincp');
    }
    
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM get_key WHERE ID = ?');
    $stmt->execute([$_GET['ID']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('<center> ID not found!</center>');
        
    }
   
} else {
    exit('<center> No ID choosed !</center>');
}

?>        
          <!-- row -->
<center>
            <div class="col-lg-6">

              <!-- Sizing Buttons -->
              <div class="card mb-4">
                <div class="card-header py-3">
                 <center><h3 class="m-0 font-weight-bold text-primary">EDIT KEY ID #<?=$contact['ID']?>
</h3></center>
<hr>
                </div>
                <div class="card-body">
 
 
 
 
 
 
 

    <form action="../admincp/edit.php?ID=<?=$contact['ID']?>" method="post">
    <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">ID</span>
  <input type="text" name="ID" class="form-control" placeholder="1" value="<?=$contact['ID']?>" id="ID" aria-describedby="addon-wrapping"required >
</div>

   <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">KEY</span>
  <input type="text" name="all_key" class="form-control" placeholder="edit key" value="<?=$contact['all_key']?>" id="all_key" aria-describedby="addon-wrapping"required >
</div>   

      <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">UDID</span>
  <input type="text" name="UDID" class="form-control" placeholder="edit UDID" value="<?=$contact['UDID']?>" id="UDID" aria-describedby="addon-wrapping">
</div> 

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">START</span>
  <input type="text" name="start_time" class="form-control" placeholder="edit start time" value="<?=$contact['start_time']?>" id="start_time" aria-describedby="addon-wrapping" >
</div>   

      <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">END</span>
  <input type="text" name="end_time" class="form-control" placeholder="edit end time" value="<?=$contact['end_time']?>" id="end_time" aria-describedby="addon-wrapping" >
</div>  
    <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">STATUS</span>
  <input type="text" name="status" class="form-control" placeholder="edit Status" value="<?=$contact['status']?>" id="status" aria-describedby="addon-wrapping"required >
</div> 
        <br>
        <center><input class="btn btn-success btn-fullwidth" onclick="myFunction()" type="submit" value="Update"></center>
        <script>
function myFunction() {
  alert("Updated Successfully!");
}
</script>
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
 
 
 
 
                     
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
 