
<?php if ($tb!=''): ?>
		<div class="alert alert-warning"><?php echo $tb; ?></div>
<?php endif ?>
<div class="container-fluid bg-main-index">
	<div class="container">
		<div class="row head">
			<div class="col-2"><img/ id="logo" src="img\logo.png"></div>
			<div class="menu col">
				<div class="home"><a href="index.php">Trang chủ</a></div>
				<div class="home"><a href="index.php?action=dattour">Đặt tour</a></div>
				<div class="home"><a href="index.php?action=amthuc">Ẩm thực</a></div>
				<div class="home"><a href="index.php?action=lienhe">Liên hệ</a></div>
				<div class="home search">
					<form class="form-inline" action="index.php?action=dattour" method="post">
						<input class="form-control" type="text" name="key" style="width: 100px">
						<button class="btn btn-hover" style="background: none; color: white;" name="Search">
								<i class="fas fa-search"></i>
						</button>
					</form>					
				</div>
			</div>
			<div class="col-2 d-flex justify-content-start" style="margin-top: 20px;">
				<?php if(!isset($_SESSION['tendn'])){?>
					<div class="dropdown">
						<button class="btn btn-light dropdown-toggle" type="button" id="dangnhapbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đăng nhập</button>
						<div class="dropdown-menu p-4" aria-labelledby="dangnhapbtn" style="width: 280px;">
							<form action="index.php?action=login" method="post">
								<div class="form-group">
									<label for="exampleDropdownFormEmail2">Tên đăng nhâp</label>
									<input type="text" class="form-control" id="" placeholder="" name="Username" title="Vui lòng điền tên đăng nhập" required>
								</div>
								<div class="form-group">
									<label for="exampleDropdownFormPassword2">Mật khẩu</label>
									<input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="" name="Password" title="Mật khẩu không đúng" required>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="dropdownCheck2">
										<label class="form-check-label" for="dropdownCheck2">Ghi nhớ tài khoản</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
								<a href="#" data-toggle="modal" data-target="#Dangky" class="btn btn-primary">Đăng ký</a>
								<a href="admin/index.php">Chuyển sang trang admin</a>

							</form>

						</div>
						<div class="modal fade bd-example-modal-xl" id="Dangky" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
								<div class="modal-content p-0">
									<div class="modal-header">
										<h5 class="modal-title" style="color: #17a2b8;">ĐĂNG KÝ THÔNG TIN THÀNH VIÊN</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="text-justify" style="padding: 3%;">
											<form action="index.php?action=registration" method="post" style="margin-left: 30%;">
												<div class="form-group">
													<label>Họ Tên</label>
													<input type="text" Required="" class="form-control" name="hoten" style="width: 400px;">
												</div>
												<div class="form-group">
													<label>Tên đăng nhập</label>
													<input  type="text" Required="" pattern=".{8,16}" title="Tên đăng nhập từ 8-16 kí tự" class="form-control" name="tendangnhap"style="width: 400px;">
												</div>
												<div class="form-group">
													<label>Mật khẩu</label>
													<input type="password" Required="" pattern=".{8,16}" title="Password từ 8-16 kí tự" class="form-control" name="Password"style="width: 400px;">
												</div>
												<div class="form-group">
													<label>Xác nhận mật khẩu</label>
													<input type="password" Required="" class="form-control" name="Repassword"style="width: 400px;">
												</div>
												<div class="form-group">
													<label>E-mail</label>
													<input type="email" Required="" class="form-control" id="exampleInputEmail1" name="email"style="width: 400px;">
												</div>
												<div class="d-flex justify-content">
													<input type="submit" name="Ghi" class="btn btn-primary" value="Đăng ký tài khoản">
												</div>

											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }else{ ?>
					<ul class="navbar-nav " style="margin-top: 5px;">
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: #fff; font-size: 15px; font-weight: bold;"><?php echo $_SESSION['tendn']; ?></span>
								<img/ class="img/-profile rounded-circle" src="img/logo.png" style="width: 50px;height: 50px;">
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
				<?php } ?>
			</div>
		</div>
		<div class="conten">
			<marquee behavior="alternate" direction="right">
				<p id="he">Welcome To Da Nang</p>
			</marquee>
		</div>
	</div>
</div>
<div class="dd">
	<div class="dacdiem">Những địa điểm nổi bật</div>
	<div><img/ class="huyhieu" src="img/69.png"></div>
	<div class="slogan">Hãy để chúng tôi giúp bạn tìm nơi hoàn hảo. Điểm đến lý tưởng cho kỳ nghỉ cuối tuần hoặc tuần trăng mật.</div>
</div>
<div class="container giua">
	<div class="row">
		<div class="col noidung">
			<img/ class="relative" src="img/anhbana.jpg">
			<div class="absolute">
				<div>4 ngày / 3 đêm chỉ với $600.00</div>
				<div style="font-weight: bold;">Ba Nà Hill</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=5">Xem chi tiết</a></button>

			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/sontra.jpg">
			<div class="absolute">
				<div>3 ngày / 2 đêm chỉ với $600.00</div>
				<div style="font-weight: bold;">Bán Đảo Sơn Trà</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=5">Xem chi tiết</a></button>

			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/songhan.jpg">
			<div class="absolute">
				<div>2 ngày / 1 đêm chỉ với $300.00</div>
				<div style="font-weight: bold;">Sông Hàn</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=5">Xem chi tiết</a></button>
			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/hoian.jpg">
			<div class="absolute">
				<div>4 ngày / 3 đêm chỉ với $800.00</div>
				<div style="font-weight: bold;">Hội An</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=8">Xem chi tiết</a></button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col noidung">
			<img/ class="relative" src="img/bienmykhe.jpg">
			<div class="absolute">
				<div>2 ngày / 1 đêm chỉ với $400.00</div>
				<div style="font-weight: bold;">Biển Mỹ Khê</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=8">Xem chi tiết</a></button>
			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/nguhoanhson.jpg">
			<div class="absolute">
				<div>Free</div>
				<div style="font-weight: bold;">Ngũ Hoành Sơn</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=8">Xem chi tiết</a></button>
			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/deohaivan.jpg">
			<div class="absolute">
				<div>Free</div>
				<div style="font-weight: bold;">Đèo Hải Vân</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=5">Xem chi tiết</a></button>
			</div>
		</div>
		<div class="col noidung">
			<img/ class="relative" src="img/chuacau.jpg">
			<div class="absolute">
				<div>3 ngày / 2 đêm chỉ với $500.00</div>
				<div style="font-weight: bold;">Chùa Cầu</div>
				<button class="btx btn-primary"><a style="color: #fff;" href="index.php?action=chitiettour&id=8">Xem chi tiết</a></button>
			</div>
		</div>
	</div>
</div>
<div class="vd">
		<!-- <video controls="">
  			<source src="img/video.mp4" type="video/mp4">
  			</video> -->
  			<div class="call-to-action-main-wrapper" data-vide-mp4="img/video2.mp4" data-vide-bg="" style="position: relative;">
  				<div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
  					<video autoplay loop style="visibility: visible; margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%; height:auto;">
  						<source src="img/video2.mp4" type="video/mp4">
  						</video>
  					</div>
  					<div class="col-to-action-wrapper">
  						<div class="background-video"></div>
  						<div class="col-to-action-content text-center">
  							<h1>
  								<font style="vertical-align: inherit;">
  									<font style="vertical-align: inherit;">Nhận 10% giảm giá cho chuyến du lịch tiếp theo của bạn
  									</font>
  								</font>
  							</h1>
  							<p>
  								<font style="vertical-align: inherit;">
  									<font style="vertical-align: inherit;">Du lịch từ ngày 15 tháng 1 đến 17 tháng 3 và nhận được ưu đãi hấp dẫn cùng với </font>
  								</font>
  								<br>
  								<font style="vertical-align: inherit;">
  									<font style="vertical-align: inherit;">giảm giá tiền mặt 
  									</font>
  									<font style="vertical-align: inherit;">chắc chắn 
  									</font>
  									<font style="vertical-align: inherit;">10%.
  									</font>
  								</font>
  							</p>
  							<a class="btm btn-primary">
  								<font style="vertical-align: inherit;">
  									<font style="vertical-align: inherit;">Đăng ký ngay</font>
  								</font>
  							</a>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="dd">
  				<div class="dacdiem">Top địa điểm du lịch</div>
  				<div><img/ class="huyhieu" src="img/69.png"></div>
  				<div class="slogan">Mọi người đều muốn đi du lịch thế giới nhưng với rất nhiều nơi để tham quan, bạn bắt đầu từ đâu?
  					<br> 
  				Hãy xem 4 địa điểm hàng đầu để ghé thăm của chúng tôi.</div>
  			</div>
  			<div class="container">
  				<div class="row">
  					<div class="col card m-1 p-0">
  						<img/ src="img/hoian.jpg" style="width: 100%" class="card-img/-top" alt="...">
  						<div class="card-body">
  							<h5 class="card-title">Hội An</h5>
  							<p class="card-text">Phố cổ Hội An là một đô thị cổ nằm ở hạ lưu sông Thu Bồn, thuộc vùng đồng bằng ven biển tỉnh Quảng Nam, Việt Nam...</p>
  							<a href="#" data-toggle="modal" data-target="#HoiAn" class="btn btn-primary">Xem Chi Tiết</a>
  						</div>
  						<div class="modal fade bd-example-modal-xl" id="HoiAn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
  								<div class="modal-content p-0">
  									<div class="modal-header">
  										<h5 class="modal-title">THÔNG TIN VỀ HỘI AN</h5>
  										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  											<span aria-hidden="true">×</span>
  										</button>
  									</div>
  									<div class="modal-body moda">
  										<div>
  											<img/ src="img/hoian.jpg" style="width: 80%; height: 300px; margin-top: 5px;" class="card-img/-top" alt="...">

  											<img/ src="img/hoian2.jpg" style="width: 80%; height: 300px; margin-top: 20px;" class="card-img/-top" alt="...">
  										</div>

  										<div class="text-justify">
  											Phố cổ Hội An là một đô thị cổ nằm ở hạ lưu sông Thu Bồn, thuộc vùng đồng bằng ven biển tỉnh Quảng Nam, Việt Nam, cách thành phố Đà Nẵng khoảng 30 km về phía Nam. Nhờ những yếu tố địa lý và khí hậu thuận lợi, Hội An từng là một thương cảng quốc tế sầm uất, nơi gặp gỡ của những thuyền buôn Nhật Bản, Trung Quốc và phương Tây trong suốt thế kỷ XVII và XVIII. Trước thời kỳ này, nơi đây cũng từng có những dấu tích của thương cảng Chăm Pa hay được nhắc đến cùng con đường tơ lụa trên biển. Thế kỷ 19, do giao thông đường thủy ở đây không còn thuận tiện, cảng thị Hội An dần suy thoái, nhường chỗ cho Đà Nẵng khi đó đang được người Pháp xây dựng. Hội An may mắn không bị tàn phá trong hai cuộc chiến tranh và tránh được quá trình đô thị hóa ồ ạt cuối thế kỷ 20. Bắt đầu từ thập niên 1980, những giá trị kiến trúc và văn hóa của phố cổ Hội An dần được giới học giả và cả du khách chú ý, khiến nơi đây trở thành một trong những điểm du lịch hấp dẫn của Việt Nam.
  											<br>

  											Đô thị cổ Hội An ngày nay là một điển hình đặc biệt về cảng thị truyền thống ở Đông Á được bảo tồn nguyên vẹn và chu đáo. Phần lớn những ngôi nhà ở đây là những kiến trúc truyền thống có niên đại từ thế kỷ 17 đến thế kỷ 19, phần bố dọc theo những trục phố nhỏ hẹp. Nằm xen kẽ giữa các ngôi nhà phố, những công trình kiến trúc tôn giáo, tín ngưỡng minh chứng cho quá trình hình thành, phát triển và cả suy tàn của đô thị. Hội An cũng là vùng đất ghi nhiều dấu ấn của sự pha trộn, giao thoa văn hóa. Các hội quán, đền miếu mang dấu tích của người Hoa nằm bên những ngôi nhà phố truyền thống của người Việt và những ngôi nhà mang phong cách kiến trúc Pháp. Bên cạnh những giá trị văn hóa qua các công trình kiến trúc, Hội An còn lưu giữ một nền văn hóa phi vật thể đa dạng và phong phú. Cuộc sống thường nhật của cư dân phố cổ với những phong tục tập quán, sinh hoạt tín ngưỡng, nghệ thuật dân gian, lễ hội văn hóa vẫn đang được bảo tồn và phát triển. Hội An được xem như một bảo tàng sống về kiến trúc và lối sống đô thị.
  										</div>
  									</div>
  									<div class="modal-footer d-flex justify-content-bettween">
  										<div class="text-center">Copyright By Nguyễn Hưng</div>
  										<button class="btn btn-primary" type="button" data-dismiss="modal">Đóng lại</button>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="col card m-1 p-0">
  						<img/ src="img/bana.jpg" style="width: 100%" class="card-img/-top" alt="...">
  						<div class="card-body">
  							<h5 class="card-title">Bà Nà</h5>
  							<p class="card-text">Bà Nà Hills thuộc huyện Hòa Vang, nằm cách trung tâm Đà Nẵng khoảng 25km về phía Tây Nam...</p>
  							<a href="#" data-toggle="modal" data-target="#BaNa" class="btn btn-primary">Xem Chi Tiết</a>
  						</div>
  						<div class="modal fade bd-example-modal-xl" id="BaNa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
  								<div class="modal-content p-0">
  									<div class="modal-header">
  										<h5 class="modal-title">THÔNG TIN VỀ BA NA HILL</h5>
  										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  											<span aria-hidden="true">×</span>
  										</button>
  									</div>
  									<div class="modal-body moda">
  										<div>
  											<img/ src="img/bana2.jpg" style="width: 80%; height: 300px; margin-top: 5px;" class="card-img/-top" alt="...">
  											<img/ src="img/anhbana.jpg" style="width: 80%; height: 300px; margin-top: 20px;" class="card-img/-top" alt="...">
  										</div>
  										<div class="text-justify">
  											<p>Bà Nà Hills thuộc huyện Hòa Vang, nằm cách trung tâm Đà Nẵng khoảng 25km về phía Tây Nam, nằm ở độ cao 1487m so với mực bước biển. Bà Nà được ví von như Đà Lạt của miền trung hay ‘’lá phổi xanh’’, ‘’hòn ngọc khí hậu’’ của Việt Nam.</p>
  											<p>Cáp treo Bà Nà Hills là 1 trong 10 hệ thống cáp treo ấn tượng nhất thế giới, đạt 2 kỷ lục Guinness về tuyến cáp treo một dây dài nhất thế giới (5.801m) và tuyến cáp có độ cao chênh lệch giữa ga đi và ga đến cao nhất thế giới (1.368m), rút ngắn thời gian lên đỉnh Bà Nà chỉ còn 17 phút. Ngồi trong cabin lơ lửng giữa lưng trời, nhìn xuống bạt ngàn núi rừng, thác nước, du khách sẽ được mãn nhãn với cảnh sắc thiên nhiên ngoạn mục.</p>
  											<p>Làng Pháp tại Bà Nà Hills tái hiện một nước Pháp cổ điển và lãng mạn với quần thể công trình kiến trúc: thị trấn, quảng trường, nhà thờ, khách sạn..., điểm tô các góc phố treo ô xanh đỏ, những chiếc xe đẩy chở đầy hoa dựng ven đường... Dạo chơi quanh làng Pháp nơi đây dễ khiến người ta thấy đong đầy hoài niệm.</p>
  											<p>Hầm rượu cổ Debay là công trình độc đáo, đào sâu trong lòng đỉnh núi Bà Nà với chiều dài 100 mét và luôn được giữ nhiệt độ lý tưởng từ 16 độ đến 20 độ C. Đến đây, du khách có dịp chiêm ngưỡng hàng trăm thùng rượu được làm bằng gỗ sồi và thưởng thức hương vị của các loại rượu hàng đầu Châu Âu.</p>
  											<p>Vườn hoa Le Jardin D’Amour ở Khu du lịch Bà Nà Hills gồm 9 thảm hoa xinh đẹp, gắn với 9 câu chuyện thú vị được đặt trong 9 phong cách kiến trúc khác nhau, tạo ra một không gian mang đậm chất thơ và ngập tràn hương sắc.</p>
  											<p>Bà Nà Hills Fantasy Park là khu vui chơi giải trí trong nhà đầu tiên tại Việt Nam có vị trí tọa lạc trên đỉnh núi, được thiết kế khác biệt theo cảm hứng từ hai cuốn tiểu thuyết nổi tiếng “Hành trình vào trung tâm Trái Đất” và “Hai vạn dặm dưới đáy biển” của nhà văn Pháp Jules Verne. Tổ hợp trò chơi ở Bà Nà Hills cũng rất phong phú, từ thiếu nhi vui nhộn đến cảm giác mạnh cho người lớn như: khu rừng Thần tiên, công viên Khủng long, Tháp rơi tự do 29m, leo núi đá nhân tạo, rạp phim 3D, 4D, 5D hiện đại và hơn 90 trò chơi miễn phí khác.</p>
  										</div>
  									</div>
  									<div class="modal-footer d-flex justify-content-bettween">
  										<div class="text-center">Copyright By Nguyễn Hưng</div>
  										<button class="btn btn-primary" type="button" data-dismiss="modal">Đóng lại</button>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="col card m-1 p-0">
  						<img/ src="img/deohaivan.jpg" style="width: 100%" class="card-img/-top" alt="...">
  						<div class="card-body">
  							<h5 class="card-title">Đèo Hải Vân</h5>
  							<p class="card-text">Đèo Hải Vân ( hay còn gọi là Ải Vân) Là danh giới tự nhiên giữa hai tỉnh Thừa Thiên Huế và Thành phố Đà Nẵng...</p>
  							<a href="#" data-toggle="modal" data-target="#DeoHaiVan" class="btn btn-primary">Xem Chi Tiết</a>
  						</div>
  						<div class="modal fade bd-example-modal-xl" id="DeoHaiVan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
  								<div class="modal-content p-0">
  									<div class="modal-header">
  										<h5 class="modal-title">THÔNG TIN VỀ ĐÈO HẢI VÂN</h5>
  										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  											<span aria-hidden="true">×</span>
  										</button>
  									</div>
  									<div class="modal-body moda">
  										<div>
  											<img/ src="img/deohaivan.jpg" style="width: 80%; height: 300px; margin-top: 5px;" class="card-img/-top" alt="...">
  										</div>
  										<div class="text-justify">
  											<p>Đèo Hải Vân ( hay còn gọi là Ải Vân) Là danh giới tự nhiên giữa hai tỉnh Thừa Thiên Huế và Thành phố Đà Nẵng với chiều dài 21km vắt ngang qua những ngọn núi cao ngất của một nhánh đi ngang đâm ngang ra biển của dãy Trường Sơn hùng vỹ.. Đèo Hải Vân (có nghĩa là biển và mây vì sóng biển vỗ chân đèo và quanh năm mây mù bao phủ trên đỉnh) Đây được coi là con đèo cảnh quan đẹp nhất và cũng hiểm trở nhất Việt Nam trên hành trình vào Nam ra Bắc từ hơn 700 năm qua, với độ cao ở đỉnh đèo là 496m so với mực nước biển.

  											Thật vậy, từ Nam chí Bắc, không có nơi nào đèo cao chênh vênh, cảnh đẹp lung linh, huyền ảo như Hải Vân. Đường đèo quanh co, khúc khuỷu men theo triền núi, uốn lượn như dải lụa vắt ngang giữa trời mây, ẩn hiện giữa cây rừng, đá núi, thực sự là bức tranh thiên nhiên hoành tráng do kỳ công của tạo hoá và bàn tay của con người tạo ra đến mức hài hoà.</p>
  										</div>
  									</div>
  									<div class="modal-footer d-flex justify-content-bettween">
  										<div class="text-center">Copyright By Nguyễn Hưng</div>
  										<button class="btn btn-primary" type="button" data-dismiss="modal">Đóng lại</button>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="col card m-1 p-0">
  						<img/ src="img/nguhoanhson2.jpg" style="width: 100%" class="card-img/-top" alt="...">
  						<div class="card-body">
  							<h5 class="card-title">Ngũ Hoành Sơn</h5>
  							<p class="card-text">Ngũ Hành Sơn nằm cách trung tâm Đà Nẵng khoảng 8 km về phía đông nam, trên một bãi cát...</p>
  							<a href="#" data-toggle="modal" data-target="#NguHoanh" class="btn btn-primary">Xem Chi Tiết</a>
  						</div>
  						<div class="modal fade bd-example-modal-xl" id="NguHoanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
  								<div class="modal-content p-0">
  									<div class="modal-header">
  										<h5 class="modal-title">THÔNG TIN VỀ NGŨ HOÀNH SƠN</h5>
  										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  											<span aria-hidden="true">×</span>
  										</button>
  									</div>
  									<div class="modal-body moda">
  										<div>
  											<img/ src="img/nguhoanhson.jpg" style="width: 80%; height: 300px;margin-top: 5px;" class="card-img/-top" alt="...">
  										</div>
  										<div class="text-justify">
  											<p>Ngũ Hành Sơn nằm cách trung tâm Đà Nẵng khoảng 8 km về phía đông nam, trên một bãi cát mênh mông gần bờ biển, thuộc làng Hoà Khuê, ấp Sơn Thủy, huyện Hòa Vang quận Ngũ Hành Sơn. Ngũ Hành Sơn với năm ngọn núi được nằm theo hệ Ngũ Hành là một kiệt tác của thiên nhiên ban tặng cho thành phố Đà Nẵng. Nhìn từ trên cao Ngũ Hành Sơn giống như một bàn tay của Trời ấn định nơi đây là vùng đất thiêng.</p>
  										</div>
  									</div>
  									<div class="modal-footer d-flex justify-content-bettween">
  										<div class="text-center">Copyright By Nguyễn Hưng</div>
  										<button class="btn btn-primary" type="button" data-dismiss="modal">Đóng lại</button>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>	
  			</div>
  			<div class="dd">
  				<div class="dacdiem">Những món ăn nổi bật</div>
  				<div><img class="huyhieu" src="img/69.png"></div>
  			</div>
  			<div class="container place">
  				<div class="row">
  					<div class="col ">
  						<div class="card bg-dark text-white">
  							<img src="img/myquang.jpg" class="card-img" alt="...">
  							<div class="card-img-overlay">
  								<h3 class="card-title">Mỳ quảng</h3>
  							</div>
  						</div>
  					</div>
  					<div class="col">
  						<div class="row ">
  							<div class="col ma">
  								<div class="card bg-dark text-white">
  									<img src="img/banhxeo.jpg" class="card-img" alt="..." style="height: 160px;">
  									<div class="card-img-overlay">
  										<h5 class="card-title">Bánh xèo</h5>
  									</div>
  								</div>
  							</div>
  							<div class="col ma">
  								<div class="card bg-dark text-white">
  									<img src="img/nemlui.jpg" class="card-img" alt="..." style="height: 160px;">
  									<div class="card-img-overlay">
  										<h5 class="card-title">Nem lụi</h5> 
  									</div>
  								</div>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col ma1">
  								<div class="card bg-dark text-white">
  									<img src="img/comga.jpg" class="card-img" alt="..." style="height: 160px;">
  									<div class="card-img-overlay">
  										<h5 class="card-title">Cơm gà</h5>

  									</div>
  								</div>
  							</div>
  							<div class="col ma1">
  								<div class="card bg-dark text-white">
  									<img src="img/banhcuon.jpg" class="card-img" alt="..." style="height: 160px;">
  									<div class="card-img-overlay">
  										<h5 class="card-title">Bánh cuốn</h5>

  									</div>
  								</div>
  							</div>
  						</div>
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
  							<a class="btn btn-primary" href="index.php?action=logout">Đăng xuất</a>
  						</div>
  					</div>
  				</div>
  			</div>
