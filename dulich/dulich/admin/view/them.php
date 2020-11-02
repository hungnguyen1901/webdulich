
<?php 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="autdor" content="">

  <title>Thêm Tour</title>

  <!-- Custom fonts for tdis template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for tdis template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
  	.form-control{
  		width: 100%;
  		border: none !important;
  	} 
	input{
		  outline:0;
	}
  </style>

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
          <img src="view/logo.png" style="widtd: 60px;height: 60px;">
        </div>
        <div class="sidebar-brand-text mx-3">MENU <sup>SB</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Quản lý tour</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=qltk">
          <i class="far fa-address-card"></i>
          <span>Quản lý đặt tài khoản</span>
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
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="tdue" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                    <img class="img-profile rounded-circle" src="view/logo.png">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <form action="index.php?action=logoutadmin">
                      <button type="submit" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Đăng xuất
                      </button>
                    </form>
                    
                  </div>
                </li>

              </ul>



            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->

            <div class="container-fluid">

              <!-- Page Heading -->
              <h1 class="h3 mb-2 text-gray-800">THÊM THÔNG TIN TOUR</h1>
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">TOUR</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="index.php?action=themtour" method="post" enctype="multipart/form-data">
                      <table class="table table-bordered" id="dataTable" widtd="100%" cellspacing="0">
                      	<thead>
                      		<tr>
                      			<th scope="col-4">Trường</th>
      							         <th scope="col-8">Giá trị</th>
                      		</tr>
                      	</thead>
                      	<tbody>
                      		<tr>
                      			<td>Tên tour</td>
                      			<td><input type="text" Required="" class="form-control" name="TenT" ></td>
                      		</tr>
                      		<tr>
                      			<td>Thời gian</td>
                      			<td><input type="text" Required="" class="form-control" name="Tgian" ></td>
                      		</tr>
                      		<tr>
                      			<td>Địa điểm</td>
                      			<td><input type="text" Required="" class="form-control" name="Diadiem" ></td>
                      		</tr>
                      		<tr>
                      			<td>Khởi hành</td>
                      			<td><input type="text" Required="" class="form-control" name="Khoihanh" ></td>
                      		</tr>
                      		<tr>
                      			<td>Giá tour</td>
                      			<td><input type="number" min="1000" Required="" class="form-control" name="Gia" ></td>
                      		</tr>
                          <tr>
                            <td>Phương tiện</td>
                            <td><input type="text" Required="" class="form-control" name="Phuongtien" ></td>
                          </tr>
                          <tr>
                            <td>Lịch khởi hành</td>
                            <td><input type="text" Required="" class="form-control" name="Lichkh" ></td>
                          </tr>
                           <tr>
                            <td>Thông tin</td>
                            <td><input type="text" Required="" class="form-control" name="Thongtin" ></td>
                          </tr>
                           <tr>
                            <td>Ưu đãi</td>
                            <td><input type="text" Required="" class="form-control" name="Uudai" ></td>
                          </tr>
                      		<tr>
                      			<td>
                      				Ảnh thumps

                      			</td>
                      			<td>
                      				<img src="" width="100px" height="80px">
                      				<input type="file" class="form-control" name="imgM">
                      			</td>
                      		</tr>
                      		<tr>
                      			<td>Ảnh tour</td>
                      			<td>
                      				<img src="" width="100px" height="80px">
                      				<input type="file" class="form-control" name="imgC">

                      			</td>
                      		</tr>
                      		
                      		
                      	</tbody>	
                      	
                        
                       </table>
                       <button type="submit" class="btn btn-info" name="submit">Thêm</button>
                      </form>

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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="tdue">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng để rời đi ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="tdue">×</span>
                </button>
              </div>
              <div class="modal-body">Bạn chắc chắn muốn rời khỏi tdang này !</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                <a class="btn btn-primary" href="index.php?action=logoutadmin">Đăng xuất</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstdap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="view/css/bs.js"/>
        <script src="vendor/bootstdap/js/bootstdap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

      </body>

      </html>
