<?php
session_start();
include("../config/condb.php");
//require("Logintrue.php");
$mdc_id = $_SESSION["mdc_id"];
$mdc_name = $_SESSION["mdc_name"];
$mdc_surname = $_SESSION["mdc_surname"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$level = $_SESSION["level"];

?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="ระบบจัดการบริหารข้อมูล" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DATA CENTER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block"><?php echo $mdc_name . " " . $mdc_level; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">DATA CENTER</li>
          <li class="nav-item">
            <a href="index2.php" class="nav-link <?php if($menu=="menuadmin"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="position.php" class="nav-link <?php if($menu=="position"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>ตำแหน่ง</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="midecal.php" class="nav-link <?php if($menu=="midecal"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>บุคลากรทางการแพทย์</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="drug.php" class="nav-link <?php if($menu=="drug"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>รูปแบบยา</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="drugtype.php" class="nav-link <?php if($menu=="drugtype"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>บัญชียา</p>
            </a>
          </li> 

          <li class="nav-header">ออกจากระบบ</li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link"  onclick="return confirm('ยืนยันออกจากระบบ !!');">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">ออกจากระบบ</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>