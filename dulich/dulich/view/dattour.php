
<body>
	<div class="container-fluid bg-main-dattour">
		<div class="container">
			<div class="row head">
				<div class="col-2"><img id="logo" src="img/anhphu/logo.png"></div>
				<div class="menu col-7" style="padding-left: 50px;text-align: center;">
					<div class="home"><a href="index.php">Trang chủ</a></div>
					<div class="home"><a href="index.php?action=dattour">Đặt tour</a></div>
					<div class="home"><a href="index.php?action=amthuc">Ẩm thực</a></div>
					<div class="home"><a href="index.php?action=lienhe">Liên hệ</a></div>
				</div>
				<div class="home search col-3">
					<form class="form-inline" action="index.php?action=dattour" method="post">
						<input class="form-control" type="text" name="key" style="width: 200px">
						<button class="btn btn-hover" style="background: none; color: white;" name="Search">
							<i class="fas fa-search"></i>
						</button>
					</form>					
				</div>
			
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top: 50px; color: #8c8c8c;;">
			Du lịch Đà Nẵng: Đà Nẵng của nước ta thuộc một trong số 10 thành phố đáng sống nhất trên thế giới. Phong cảnh thiên nhiên tươi đẹp, thơ mộng và bình yên chính là điểm đầu tiên thu hút du khách của Đà Nẵng. Bên cạnh đó, những công trình nhân tạo vô cùng lộng lẫy, những khu vui chơi giải trí rất quy mô và hoành tráng cũng tạo nên dấu ấn đặc sắc cho thành phố này. Người dân Đà Nẵng rất văn minh, lịch thiệp, lòng mến khách vô cùng của họ đã níu chân du khách muốn quay trở lại nơi đây thêm lần nữa. Quả thực, Đà Nẵng là thành phố đáng đến trong chuyến du lịch của bạn.
		</div>
		<?php
		if($rs!=null){
			while ($item = $rs->fetch_assoc()) {
				?>
				<div class="row" style="margin-top: 50px;">
					<div class="col-9">
						<div class="mb-3" style="max-width: 800px; border-right: 2px solid #bebebe;">
							<div class="row no-gutters">
								<div class="col-md-5">
									<img src="<?php echo ($item["anh"]); ?>" class="card-img" alt="...">
								</div>
								<div class="col-md-7">
									<div class="card-body">
										<h5 class="card-title"><a style="text-decoration: none;" href="index.php?action=chitiettour&id=<?php echo($item["id"]) ?>">Du lịch Đà Nẵng: <?php echo ($item["ten"]); ?></a></h5>
										<div>
											<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;"><?php echo ($item["tgian"]);  ?></span></div>
											<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hành : <?php echo ($item['khoihanh']); ?></span></div>
											<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;"><?php echo ($item['diadiem']); ?></span></div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3 dat">
						<div style="font-size: 20px;font-weight: bold;margin-left: 50px;"><?php echo number_format($item['gia']); ?> VNĐ</div>
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
						<button type="button" class="btn btn-primary" style="margin-left: 65px;margin-top: 20px;"><a style="color: #fff; text-decoration: none;" href="index.php?action=chitiettour&id=<?php echo($item["id"]) ?>">Xem chi tiết</a></button>
					</div>

				</div>

			<?php }
			} ?>


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

	</body>
	</html>