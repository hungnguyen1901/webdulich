<?php 
 if(isset($_SESSION['username'])){

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quản lý đặt tour</title>

  <!-- Custom fonts for this template-->
  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="view/logo.png" style="width: 60px;height: 60px;">
        </div>
        <div class="sidebar-brand-text mx-3">MENU <sup>SB</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Quản lý tour</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=qltk">
          <i class="far fa-address-card"></i>
          <span>Quản lý tài khoản</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản lý đặt tour</span>
        </a>
      </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

    </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>


              <!-- Topbar Navbar -->

              <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                    <img class="img-profile rounded-circle" src="view/logo.png">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    
                      <a type="submit" class="ntn btn-primary dropdown-item" href="index.php?action=logoutadmin" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Đăng xuất
                      </a>
                    </form>
                    
                  </div>
                </li>

              </ul>



            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->

            <div class="container-fluid">

              <!-- Page Heading -->
              <h1 class="h3 mb-2 text-gray-800">Thông tin tour</h1>
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">TOUR</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="index.php" method="post">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tên tour</th>
                            <th>Giá tiền</th>
                            <th>Thao tác</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                          if($rs!=null){
                            $i=1;
                            while ($item = $rs->fetch_assoc()) {
                              ?>
                              <tr>
                                <td><?php echo ($i++); ?></td>
                                <td>Du lịch Đà Nẵng:<?php echo ($item['ten']); ?></td>
                                <td ><?php echo number_format($item['gia']); ?></td>
                                <td>
                                  <a href="index.php?action=upDate&id=<?php echo($item['id']) ?>">Sửa</a>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#xoa<?php echo($item['id']) ?>">
                                    Xóa
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id=
                                  "xoa<?php echo($item['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận xóa</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Bạn có muốn xóa <?php echo ($item['ten']); ?>?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="index.php?action=delete&id=<?php echo($item['id']) ?>" class="btn btn-primary btn btn-primary">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            <?php }} ?>


                          </tbody>
                        </table>
                      </form>
                      <button type="button" class="btn btn-primary">
                        <a style="color: #fff;" href="index.php?action=themtour">Thêm Tour</a>
                      </button>

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div>


        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng để rời đi ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Bạn chắc chắn muốn rời khỏi trang này !</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" href="index.php?action=logoutadmin">Đăng xuất</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="view/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="view/css/bs.js"/>
        <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="view/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="view/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="view/js/demo/chart-area-demo.js"></script>
        <script src="view/js/demo/chart-pie-demo.js"></script>

      </body>

      </html>
<?php } else{
  require_once 'view/login.php';;
} ?>
