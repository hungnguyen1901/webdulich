<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DA NANG FANTASTICITY</title>
	<link rel="stylesheet" type="text/css" href="dattour.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid bg-main">
		<div class="container">
			<div class="row head">
				<div class="col-2"><img id="logo" src="anhphu/logo.png"></div>
				<div class="menu col">
					<div class="home"><a href="http://localhost:81/code/index2.php">Trang chủ</a></div>
					<div class="home"><a href="http://localhost:81/code/trangcon/dattour2.php">Đặt tour</a></div>
					<div class="home"><a href="http://localhost:81/code/trangcon/amthuc2.php">Ẩm thực</a></div>
					<div class="home"><a href="http://localhost:81/code/trangcon/lienhe2.php">Liên hệ</a></div>
					<div class="home search">
						<input type="text" name="" style="width: 100px">
						<i class="fas fa-search"></i>
					</div>
				</div>
				<ul class="navbar-nav " style="margin-top: 8px;">
		            <li class="nav-item dropdown no-arrow">
		              	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: #fff; font-size: 15px; font-weight: bold;">Tên admin</span>
		                <img class="img-profile rounded-circle" src="anhphu/logo.png" style="width: 50px;height: 50px;">
		             	</a>
		              <!-- Dropdown - User Information -->
		              	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
		                	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
		                  		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
		                  		Đăng xuất
		                	</a>
		              	</div>
		            </li>

          		</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top: 50px; color: #8c8c8c;;">
			Du lịch Đà Nẵng: Đà Nẵng của nước ta thuộc một trong số 10 thành phố đáng sống nhất trên thế giới. Phong cảnh thiên nhiên tươi đẹp, thơ mộng và bình yên chính là điểm đầu tiên thu hút du khách của Đà Nẵng. Bên cạnh đó, những công trình nhân tạo vô cùng lộng lẫy, những khu vui chơi giải trí rất quy mô và hoành tráng cũng tạo nên dấu ấn đặc sắc cho thành phố này. Người dân Đà Nẵng rất văn minh, lịch thiệp, lòng mến khách vô cùng của họ đã níu chân du khách muốn quay trở lại nơi đây thêm lần nữa. Quả thực, Đà Nẵng là thành phố đáng đến trong chuyến du lịch của bạn.
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-9">
				<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
  					<div class="row no-gutters">
    					<div class="col-md-5">
     						<img src="anhphu/hoian.jpg" class="card-img" alt="...">
    					</div>
   						<div class="col-md-7">
     						<div class="card-body">
       			 				<h5 class="card-title"><a style="text-decoration: none;" href="http://localhost:81/code/trangcon/hoian2.php">Du lịch Đà Nẵng: ĐÀ NẴNG – HỘI AN – HUẾ</a></h5>
        						<div>
						        	<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">4 ngày 3 đêm</span></div>
						        	<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : Hàng ngày</span></div>
						        	<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>

        						</div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div class="col-3 dat">
				<div style="font-size: 20px;font-weight: bold;margin-left: 50px;">3.600.000 VNĐ</div>
				<div class="stars">
					<form action="">
						<input class="star star-5" id="star-5" type="radio" name="star"/>
						<label class="star star-5" for="star-5"></label>
						<input class="star star-4" id="star-4" type="radio" name="star"/>
						<label class="star star-4" for="star-4"></label>
						<input class="star star-3" id="star-3" type="radio" name="star"/>
						<label class="star star-3" for="star-3"></label>
						<input class="star star-2" id="star-2" type="radio" name="star"/>
						<label class="star star-2" for="star-2"></label>
						<input class="star star-1" id="star-1" type="radio" name="star"/>
						<label class="star star-1" for="star-1"></label>
					</form>
				</div>
				<div style="margin-left: 85px;font-size: 14px;">(0 review)</div>
				<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="http://localhost:81/code/trangcon/hoian2.php">Xem chi tiết</a></button>
			</div>

		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-9">
				<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
  					<div class="row no-gutters">
    					<div class="col-md-5">
     						<img src="anhphu/anhbana.jpg" class="card-img" alt="...">
    					</div>
   						<div class="col-md-7">
     						<div class="card-body">
       			 				<h5 class="card-title"><a style="text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Du lịch Đà Nẵng: Đà Nẵng - Sơn Trà - Bà Nà</a></h5>
        						<div>
						        	<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">4 ngày 3 đêm</span></div>
						        	<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : thứ 5 và thứ 7 hàng tuần</span></div>
						        	<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>

        						</div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div class="col-3 dat">
				<div style="font-size: 20px;font-weight: bold;margin-left: 50px;">2.800.000 VNĐ</div>
				<div class="stars">
					<form action="">
						<input class="star star-5" id="star-5" type="radio" name="star"/>
						<label class="star star-5" for="star-5"></label>
						<input class="star star-4" id="star-4" type="radio" name="star"/>
						<label class="star star-4" for="star-4"></label>
						<input class="star star-3" id="star-3" type="radio" name="star"/>
						<label class="star star-3" for="star-3"></label>
						<input class="star star-2" id="star-2" type="radio" name="star"/>
						<label class="star star-2" for="star-2"></label>
						<input class="star star-1" id="star-1" type="radio" name="star"/>
						<label class="star star-1" for="star-1"></label>
					</form>
				</div>
				<div style="margin-left: 85px;font-size: 14px;">(0 review)</div>
				<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Xem chi tiết</a></button>
			</div>

		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-9">
				<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
  					<div class="row no-gutters">
    					<div class="col-md-5">
     						<img src="anhphu/bana2.jpg" class="card-img" alt="...">
    					</div>
   						<div class="col-md-7">
     						<div class="card-body">
       			 				<h5 class="card-title"><a style="text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Du lịch Đà Nẵng: ĐÀ NẴNG – BÀ NÀ – KHU TẮM BÙN GALINA</a></h5>
        						<div>
						        	<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">3 ngày 2 đêm</span></div>
						        	<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : Hàng ngày</span></div>
						        	<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>

        						</div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div class="col-3 dat">
				<div style="font-size: 20px;font-weight: bold;margin-left: 50px;">2.250.000 VNĐ</div>
				<div class="stars">
					<form action="">
						<input class="star star-5" id="star-5" type="radio" name="star"/>
						<label class="star star-5" for="star-5"></label>
						<input class="star star-4" id="star-4" type="radio" name="star"/>
						<label class="star star-4" for="star-4"></label>
						<input class="star star-3" id="star-3" type="radio" name="star"/>
						<label class="star star-3" for="star-3"></label>
						<input class="star star-2" id="star-2" type="radio" name="star"/>
						<label class="star star-2" for="star-2"></label>
						<input class="star star-1" id="star-1" type="radio" name="star"/>
						<label class="star star-1" for="star-1"></label>
					</form>
				</div>
				<div style="margin-left: 85px;font-size: 14px;">(0 review)</div>
				<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Xem chi tiết</a></button>
			</div>

		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-9">
				<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
  					<div class="row no-gutters">
    					<div class="col-md-5">
     						<img src="anhphu/noibat3.jpg" class="card-img" alt="...">
    					</div>
   						<div class="col-md-7">
     						<div class="card-body">
       			 				<h5 class="card-title"><a style="text-decoration: none;" href="http://localhost:81/code/trangcon/hoian2.php">Du lịch Đà Nẵng : ĐÀ NẴNG – SƠN TRÀ – NGŨ HÀNH SƠN – HỘI AN – HUẾ</a></h5>
        						<div>
						        	<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">5 ngày 4 đêm</span></div>
						        	<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hành: Thứ 4, 7 hàng tuần</span></div>
						        	<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>

        						</div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div class="col-3 dat">
				<div style="font-size: 20px;font-weight: bold;margin-left: 50px;">3.550.000 VNĐ</div>
				<div class="stars">
					<form action="">
						<input class="star star-5" id="star-5" type="radio" name="star"/>
						<label class="star star-5" for="star-5"></label>
						<input class="star star-4" id="star-4" type="radio" name="star"/>
						<label class="star star-4" for="star-4"></label>
						<input class="star star-3" id="star-3" type="radio" name="star"/>
						<label class="star star-3" for="star-3"></label>
						<input class="star star-2" id="star-2" type="radio" name="star"/>
						<label class="star star-2" for="star-2"></label>
						<input class="star star-1" id="star-1" type="radio" name="star"/>
						<label class="star star-1" for="star-1"></label>
					</form>
				</div>
				<div style="margin-left: 85px;font-size: 14px;">(0 review)</div>
				<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="http://localhost:81/code/trangcon/hoian2.php">Xem chi tiết</a></button>
			</div>

		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-9">
				<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
  					<div class="row no-gutters">
    					<div class="col-md-5">
     						<img src="anhphu/bana4.jpg" class="card-img" alt="...">
    					</div>
   						<div class="col-md-7">
     						<div class="card-body">
       			 				<h5 class="card-title"><a style="text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Du lịch Đà Nẵng: HÀ NỘI – ĐÀ NẴNG – SƠN TRÀ – HỘI AN – BÀ NÀ – HUẾ</a></h5>
        						<div>
						        	<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">5 ngày 4 đêm</span></div>
						        	<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hành: Thứ 4, 7 hàng tuần</span></div>
						        	<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Hà Nội</span></div>

        						</div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			<div class="col-3 dat">
				<div style="font-size: 20px;font-weight: bold;margin-left: 50px;">5.900.000 VNĐ</div>
				<div class="stars">
					<form action="">
						<input class="star star-5" id="star-5" type="radio" name="star"/>
						<label class="star star-5" for="star-5"></label>
						<input class="star star-4" id="star-4" type="radio" name="star"/>
						<label class="star star-4" for="star-4"></label>
						<input class="star star-3" id="star-3" type="radio" name="star"/>
						<label class="star star-3" for="star-3"></label>
						<input class="star star-2" id="star-2" type="radio" name="star"/>
						<label class="star star-2" for="star-2"></label>
						<input class="star star-1" id="star-1" type="radio" name="star"/>
						<label class="star star-1" for="star-1"></label>
					</form>
				</div>
				<div style="margin-left: 85px;font-size: 14px;">(0 review)</div>
				<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="http://localhost:81/code/trangcon/bana2.php">Xem chi tiết</a></button>
			</div>

		</div>
	</div>
	<div class="container">
		<div class="bangtin">
			<div>
				<span><i id="icon" class="far fa-envelope"></i></span>
				<span class="theodoi">Theo dõi bảng tin của chũng tôi</span>
			</div>
			<div>
				<input id="email" type="text" name="" placeholder="Nhập Email">
			</div>
		</div>
	</div>
	<hr>
	<div class="container hotro">
		<div class="row">
			<div class="col hotro2">
				<h4>ABOUT DA NANG</h4>
				<div>Lorem ipsum dolor sit amet,
				consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
				<div>
					<i class="fas fa-map-marker-alt"></i>
					<span> 22 Seven Worcester</span>
				</div>
				<div>
					<i class="fas fa-phone-volume"></i>
					<span>+84 384 227 810</span>
				</div>
				<div>
					<i class="fas fa-envelope"></i>
					<span> support@gmail.com</span>
				</div>
			</div>
			<div class="col hotro2">
				<h4>BOOKING</h4>
				<div>Top secret Hotels</div>
				<div>Afternoon Tea</div>
				<div>Weekend Breaks</div>
				<div>Sky Restaurant</div>
				<div>Garden Restaurant</div>
				<div>Help & Support</div>
				<div>Affiliate Programs</div>
			</div>
			<div class="col hotro2">
				<h4>SELLING</h4>
				<div>How it works</div>
				<div>Seller Protection</div>
				<div>Cancel Reservation Guide</div>
				<div>Sell Your Reservation</div>
				<div>How to Sell Hotel Rooms</div>
				<div>VIPS Room</div>
				<div>Secret Room</div>
			</div>
			<div class="col hotro2">
				<h4>SUPPORT</h4>
				<div>Trust + Safety</div>
				<div>FAQs</div>
				<div>Testimonials</div>
				<div>Contact Us</div>
				<div>Hotel Cancellation Policy</div>
				<div>Deal with Us</div>
				<div>Travellia Special</div>
			</div>
		</div>
	</div>
	<div class="container-fluid end">
		<div class="container end2">
			<div class="end3">DANANG © 2019<span> - DESIGNED BY <span class="ten">NGUYEN HUNG</span></span></div>
			<div></div>
			<div class="icon">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-google-plus-g"></i>
				<i class="fab fa-pinterest-square"></i>
			</div>
		</div>
	</div>
 <!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      	<div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLabel">Chắc muốn đăng xuất ?</h5>
		          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">×</span>
		          </button>
		        </div>
		        <div class="modal-body">Bạn chắc chắn muốn rời khỏi trang này !</div>
		        <div class="modal-footer">
		          <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
		          <a class="btn btn-primary" href="dattour.php">Đăng xuất</a>
		        </div>
	      	</div>
	    </div>
	</div>
</body>
</html>