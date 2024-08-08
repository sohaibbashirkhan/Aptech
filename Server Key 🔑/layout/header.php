<?php
require_once 'meta.php';

?>
 <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admincp">
        <div class="sidebar-brand-icon">
          <img src="https://s1.uphinh.org/2021/05/27/808422AC-8EF6-4C27-AFA9-6B05DE3106CC.png">
        </div>
        <div class="sidebar-brand-text mx-3">NGUYENNAM</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="../admincp">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Page</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Page</h6>
            <a class="collapse-item" href="createkey.php">Create key</a>
            <a class="collapse-item" href="post.php">Post</a>
            
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="https://s1.uphinh.org/2021/05/27/808422AC-8EF6-4C27-AFA9-6B05DE3106CC.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <?php 

   $total_keys = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM `get_key`")) ['COUNT(*)'];
   $total_admins = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM `admin`")) ['COUNT(*)'];   
     $total_unuseActive = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM `get_key` WHERE `status` = 'Active'  ")) ['COUNT(*)'];
    $total_unusepending = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM `get_key` WHERE `status` = 'pending'  ")) ['COUNT(*)'];
   

?>