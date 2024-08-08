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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>

          <!-- row -->
<?php
require_once '../layout/if.php';
?>
 <?php


require_once '../core/info.php'; 
require_once '../core/pdo.php';


$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$records_per_page = 1000;

$stmt = $pdo->prepare('SELECT * FROM get_key ORDER BY ID LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

$num_user = $pdo->query('SELECT COUNT(*) FROM get_key')->fetchColumn();
?>     
<style>

.copy-click {
  position: relative;
  padding-bottom: 2px;
  text-decoration: none;
  cursor: copy;
  color: #484848;
  border-bottom: 1px dashed #767676;
  transition: background-color calc(var(--duration) * 2) var(--ease);
  
  &:after {
    content: attr(data-tooltip-text);
    position: absolute;
    bottom: calc(100% + 6px);
    left: 50%;
    padding: 8px 16px;
    white-space: nowrap;
    background-color: white;
    border-radius: 4px;
    box-shadow: 0 0 0 -12px rgba(0,0,0,0);
    pointer-events: none;
    backface-visibility: hidden;
    opacity: 0;
    transform: translate(-50%, 12px);
    transition: 
      box-shadow calc(var(--duration) / 1.5) var(--bounce),
      opacity calc(var(--duration) / 1.5) var(--bounce),
      transform calc(var(--duration) / 1.5) var(--bounce);
  }
 
  &.is-hovered {    
    &:after {
      box-shadow: 0 4px 8px rgba(0,0,0,0.10);
      opacity: 1;
      transform: translate(-50%, 0);
      transition-timing-function: var(--ease);
    }
  }
  
  &.is-copied {
    background-color: yellow;
    
    &:after { 
      content: attr(data-tooltip-text-copied); 
    }
  }
}

</style>
              <!-- Sizing Buttons -->
              <div class="card">
                <div class="card-header ">
                 <center><h3 class="m-0 font-weight-bold text-primary">ALL KEYS</h3></center>
                 <hr>
                </div>
                <div class="card-body">
                 
                 <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>ID</th>
            <th>KEY</th>
            <th>UDID</th>
            <th>TIME</th>
            <th>START</th>
            <th>STOP</th>
            <th>STATUS</th>
            <th>OPTION</th>   
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($user as $user): ?>
                      <tr>
                <td><span class="badge badge-danger"><?=$user['ID']?></span></td>
                <td><a class="copy-click" data-tooltip-text="Click to copy" data-tooltip-text-copied="✔ Copied to clipboard"><?=$user['all_key']?></a></td>
                <td><?=$user['UDID']?></td>
                <td><span class="badge badge-success"><?=$user['set_time']?></span></td>
                <td><span class="badge badge-info"><?=$user['start_time']?></span></td>
                <td><span class="badge badge-danger"><?=$user['end_time']?></span></td>
                <td><?=$user['status']?></td>
                
                <td class="actions">
                    <a class="btn btn-info" href="../admincp/edit.php?ID=<?=$user['ID']?>" class="edit"><i class="fas fa-pen"></i></a>
                    <a class="btn btn-danger" href="../admincp/del.php?ID=<?=$user['ID']?>" class="trash"><i class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-warning" href="../admincp/res.php?ID=<?=$user['ID']?>" class="trash"><i class="fas fa-sync-alt"></i></a>
                </td>                         
                      </tr>
                        
                                 <?php endforeach; ?>
                    </tbody>
                  </table>
                  <script>
      
      
      const links = document.querySelectorAll('.copy-click');
const cls = {
  copied: 'is-copied',
  hover: 'is-hovered'
}

const copyToClipboard = str => {
  const el = document.createElement('input');
  str.dataset.copyString ? el.value = str.dataset.copyString : el.value = str.text;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.opacity = 0;
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
}

const clickInteraction = (e) => {
  e.preventDefault();
  copyToClipboard(e.target);
  e.target.classList.add(cls.copied);
  setTimeout(() => e.target.classList.remove(cls.copied), 1000);
  setTimeout(() => e.target.classList.remove(cls.hover), 700);  
}

Array.from(links).forEach(link => {
  link.addEventListener('click', e => clickInteraction(e));
  link.addEventListener('keypress', e => {
    if (e.keyCode === 13) clickInteraction(e);
  });
  link.addEventListener('mouseover', e => e.target.classList.add(cls.hover));
  link.addEventListener('mouseleave', e => {
    if (!e.target.classList.contains(cls.copied)) {
     e.target.classList.remove(cls.hover); 
    }
  });
});
      
      </script>

                 
                 
                  
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
 