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
            <h1 class="h3 mb-0 text-gray-800">Delete Key</h1>
            
          </div>
<?php


require_once '../core/pdo.php';

$msg = '';
// Check that the contact ID exists
if (isset($_GET['ID'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM get_key WHERE ID = ?');
    $stmt->execute([$_GET['ID']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('<center>ID not found!</center>');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM get_key WHERE ID = ?');
            $stmt->execute([$_GET['ID']]);
            $msg = '<script type="text/javascript">
            window.location.href = "../admincp"
        </script>';
        header('location: ../admincp');
        } else {
            // User clicked the "Back" button, redirect them back to the read page
            header('Location: ../admincp');
            exit;
        }
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
                 <center><h3 class="m-0 font-weight-bold text-primary">DELETE KEY ID #<?=$contact['ID']?>
<hr>
                </div>
                <div class="card-body">
 
 
 
 
 
 	<center> <h2>Delete ID #<?=$contact['ID']?></h2> </center>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
<center><p>Are you sure you want to delete ID #<?=$contact['ID']?>?</p></center>
<br>
       <center> <a class="btn btn-danger" onclick="myFunction()" href="del.php?ID=<?=$contact['ID']?>&confirm=yes">Yes</a>
        </center>
        <script>
function myFunction() {
  alert("Delete Successfully!");
}
</script>


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
 