<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DA NANG FANTASTICITY</title>
	<link rel="stylesheet" type="text/css" href="bana.css">
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

	<div class="container-fluid" style="background: #bebebe;">
		<div class="container">
			<div class="tour">
				<div style=" margin-top: 30px;">
					<div id="Tentour" style="font-size: 30px; font-weight: bold;">Du lịch Đà Nẵng: Đà Nẵng - Sơn Trà - Bà Nà</div>
					<div class="danhgia">
						<div style="font-size: 20px; margin-top: 10px;">Đánh giá :</div>
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
					</div>
				</div>
				<div>
					<div style=" height: 100%; width: 100%;">
						<div style="padding-top: 10px;font-weight: bold; height: 50px; color: #fff; text-align: center;background: rgba(44, 72, 122, 0.9);}">Giá tour</div>
						<div id="Giatour" style="padding-top: 23px; height: 100px;font-size: 25px;font-weight: bold; color: #fff; text-align: center;background: linear-gradient(to right, #4675e7 , #4692e7); ">2.800.000 vnđ</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #e1e1e1;height: 150px;">
		<div class="container tou">
			<div class="tou2">
				<div>
					<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;">4 ngày 3 đêm</span></div>
					<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>
				</div>
				<div>
					<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : thứ 5 và thứ 7 hàng tuần</span></div>
					<div class="time"><i class="fas fa-plane-arrival"></i><span style="margin-left: 24px;">Đà Nẵng</span></div>
				</div>
			</div>
			<div class="tou3">
				<div>
					<!-- <input type="button" name="" value="ĐẶT TOUR NGAY" onclick="dattour()" style="background: #485da1;color: #fff;font-weight: bold;font-size: 14px;width: 250px;height: 50px;margin-top: 30px;margin-left: 40px;"> -->
					<input data-toggle="modal" data-target="#Dattour" type="button" value="ĐẶT TOUR NGAY" class="button" onclick="DKtour()"  style="background: #485da1;color: #fff;font-weight: bold;font-size: 14px;width: 250px;height: 50px;margin-top: 30px;margin-left: 40px;">

					<div class="modal fade bd-example-modal-xl" id="Dattour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				    		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
				    			<div class="modal-content p-0">
					        		<div class="modal-header">
					          			<h5 class="modal-title" style="color: #17a2b8;">ĐĂNG KÝ TOUR</h5>
					          			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					            		<span aria-hidden="true">×</span>
					          			</button>
					        		</div>
					        		<div class="modal-body">
					        			<div class="text-justify" style="padding: 3%;">
					        				<form action="index.php" method="post" style="margin-left: 30%;">
												<div class="form-group">
												    <label>Họ Tên</label>
												    <input type="text" class="form-control" name="name" style="width: 400px;">
											  	</div>
											  	<div class="form-group">
												    <label>Số điện thoại</label>
												    <input  type="number" class="form-control" name="tendn"style="width: 400px;">
											  	</div>
											  	<div class="form-group">
												    <label>Tên tour</label>
												    <input id="Ttour" type="text" class="form-control" name="mk"style="width: 400px;" readonly="">
											  	</div>
											  	<div class="form-group">
												    <label>Giá tour</label>
												    <input id="Gtour" type="text" class="form-control" name="mk"style="width: 400px;" readonly="">
											  	</div>
											  	<div class="form-group">
												    <label>E-mail</label>
												    <input type="text" class="form-control" name="email"style="width: 400px;">
											  	</div>
											  	<div class="d-flex justify-content">
											  		<input type="button" name="Ghi" class="btn btn-primary" value="Đăng ký đặt tour" onclick="Dky()">
											  	 </div>
				  	
											</form>
					        		
					        			</div>
					        		</div>
				      			</div>
				    		</div>
						</div>
				</div>
				<div class="tou4">
					<div class="time2"><i style="color: #c50632;" class="far fa-heart"></i><span style="margin-left: 10px;">Lưu vào danh sách yêu thích</span></div>
					<div class="time2"><i  style="color: #4692e7;" class="far fa-eye"></i><span style="margin-left: 10px;">1520</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container info" style="margin-top: 70px;">
		<div class="trai" style="padding-right: 50px;">
			<div class="thongtin">
				<div class="fontdau">
					<i class="far fa-file-alt"></i>
					<span>Thông tin tour</span>
				</div>
				<div style="margin-top: 30px;">
					<div>Việc Đà Nẵng được chọn là thành phố đáng sống nhất Việt Nam là đề tài nhận được rất nhiều sự quan tâm và tranh cãi của người Việt nói chung và Đà Nẵng nói riêng, bởi nó đánh động vào lòng tự hào, sự kiêu hãnh trong mỗi con người đối với tình yêu quê hương, đất nước… không những thế những thắng cảnh ở đây đẹp mê hồn luôn níu giữ các du khách đến mà không muốn về ….</div>
				</div>
			</div>
			<div style="margin-top: 20px; height: 300px;border-bottom: 1px solid #bebebe;">
				<div class="fontdau">
					<i class="far fa-thumbs-up"></i>
					<span>Ưu đãi đặc biệt</span>
				</div>
				<div style="margin-top: 30px; background-color:#4887bf; height: 200px; ">
					<div class="uudai">
						<i class="far fa-bell"></i>
						<span style="margin-left: 10px;">MỘT SỐ MÓN QUÀ BẠN SẼ NHẬN ĐƯỢC:</span>
					</div>
					<div class="uudai2">
						<div>- Mũ du lịch của công ty du lịch</div>
						<div>- Vỏ hộ chiếu</div>
						<div>- Thẻ hành lý</div>
					</div>
				</div>
			</div>
			<div style="margin-top: 20px;">
				<div class="fontdau">
					<i class="fas fa-car"></i>
					<span>Chương trình tour</span>
				</div>
				<div style="margin-top: 30px;">
					<div class="accordion" id="accordionExample">
						<div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          <span style="color: #000; font-weight: bold;">Ngày 1</span>
						          <span style="font-weight: bold; font-size: 15px;">ĐÓN KHÁCH - SƠN TRÀ - MỸ KHÊ - SUNWHEEL</span>
						        </button>
						      </h2>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Quý khách tự túc phương tiện ra sân bay Nội Bài – Đáp chuyến bay lúc 6h25p đi Đà Nẵng.</p>
								<p>Sáng 7h40: HDV Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm) từ 07h00 đến 13h00 (sau thời gian này, quý khách tự túc nhập đoàn) đưa đi ăn trưa với đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng Khách sạn 3* nghỉ ngơi.</p>
								<p>Chiều: Khởi hành đi Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự – nơi có tượng Phật Bà 67m cao nhất Việt Nam và tắm biển Mỹ Khê Đà Nẵng.</p>
								<p>Tối:Ăn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <span style="color: #000; font-weight: bold;">Ngày 2</span>
						          <span style="font-weight: bold; font-size: 15px;">CÙ LAO CHÀM – PHỐ CỔ HỘI AN</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Sáng: Điểm tâm. Khởi hành vào Hội An ngồi tàu cao tốc tại biển Cửa Đại – Hội An đi Cù Lao Chàm khu dự trữ sinh quyển thế giới, gồm cụm đảo ngoài khơi biển Đông cách Hội An 12 hải lý. Tham quan chùa Hải Tạng hơn 400 trăm năm tuổi. Âu thuyền khu vực tranh bão của ngư dân, khu làng chài và khu lăng miếu cổ.</p>
						        <p>Trưa: Ăn trưa nhà hàng Cù Lao Chàm</p>
						        <p>Chiều: Tiếp tục thăm khu bảo tồn biển và tham gia các hoạt động lặn biển (Snokelling) khám phá san hô… tắm biển.Về lại đất liền khởi hành qua Hội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Trở về Đà Nẵng theo con đường biển mang tên Đại tướng Võ Nguyên Giáp.Tham quan Làng đá Non Nước ngắm nhìn Ngũ Hành Sơn</p>
						        <p>Tối: Ăn tối Nhà hàng. Tự do khám Đà Thành về đêm.</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						         <span style="color: #000; font-weight: bold;">Ngày 3</span>
						         <span style="font-weight: bold; font-size: 15px;">BÀ NÀ NÚI CHÚA – TẮM BIỂN MỸ KHÊ</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Sáng: Điểm tâm. Khởi hành đi tham quan Bà Nà – Núi Chúa (Vé cáp treo Bà Nà tự túc), nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng chùa Linh Ứng với tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn. Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>
						        <p>Trưa: Ăn trưa nhà hàng tại chân núi Bà Nà.</p>
						        <p>Chiều: Khởi hành về lại trung tâm thành phố,quý khách sẽ được trầm mình bên bờ biển xinh đẹp Mỹ Khê.</p>
						        <p>Tối: Ăn tối tại nhà hàng hải sản. Thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingFour">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
						         <span style="color: #000; font-weight: bold;">Ngày 4</span>
						         <span style="font-weight: bold; font-size: 15px;">BẢO TÀNG ĐÀ NẴNG – MUA SẮM – TIỄN KHÁCH</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Sáng: Điểm tâm. Tham quan Bảo Tàng Đà Nẵng – Nơi trưng bày các kỷ vật phản ảnh đời sống văn hóa, lịch sử và con người Xứ Quảng. Chụp hình lưu niệm Trung tâm hành chính – Biểu tượng vươn lên mạnh mẽ của thành phố Đà Nẵng.</p>
						        <p>Trưa: Ăn trưa nhà hàng. Quý khách tiếp tục thưởng thức không gian Café và mua sắm quà lưu niệm tại Da Nang Souvenir. (Do chuyến bay trễ 23h00 khởi hành nên Quý khách sẽ bị phụ thu thêm 250.000/1 phòng)
								21h00: Tiễn quý khách tại sân bay Đà Nẵng (các chuyến sau 14h00). Chia tay Quý khách và kết thúc chương trình. Hẹn gặp lại quý khách!</p>
						        
						      </div>
						    </div>
						</div>
					</div>
				</div>
				<div style="border-bottom: 1px solid #bebebe; margin-top: 50px;"></div>
			</div>
			<div style="margin-top: 30px; border-bottom: 1px solid #bebebe; height: 520px;">
				<div class="fontdau">
					<i class="far fa-money-bill-alt"></i>
					<span>Giá Tour áp dụng cho 01 Khách (VND)</span>
				</div>
				<div class="fontgiua">
					<div class="table1">
						<div>Phương tiện</div>
						<div>Lịch khởi hành</div>
						<div>Giá tour</div>
					</div>
					<div class="table2">
						<div>Máy bay</div>
						<div>Thứ 5 và thứ 7 hàng tuần</div>
						<div style="color: red;font-weight: bold;">2.800.000 VNĐ</div>
					</div>
				</div>
				<div class="luuy">
					<div style="font-size: 16px;">Bao gồm :</div>
					<div>
						<div>– Xe vận chuyển tốt đời mới phục vụ theo chương trình. </div>
						<div>– Ngủ 2 khách/phòng khách sạn tiện nghi 3* Đà Nẵng. (Khách sạn 3*: Bamboo Green, Luxury )</div>
						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 07 bữa chính tiêu chuẩn 120.000 VNĐ/suất.</div>
						<div>– Vé các điểm tham quan.</div>
						<div>– Du thuyền Sông Hàn.</div>
						<div>– Tàu cao tốc Cù Lao Chàm (Phí biên phòng, dụng cụ lặn ngắm san hô)</div>
						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>
						<div>– Phục vụ 02 chai 0.5l/khách /ngày.</div>
						<div>– Bảo hiểm du lịch: 20.000.000 VNĐ/vụ.</div>
					</div>
				</div>
				
			</div>
			<div style="margin-top: 30px;">
				<div class="fontdau">
					<i class="far fa-images"></i>
					<span>Ảnh đẹp</span>
				</div>
				<div style="margin-top: 30px;">
					<!-- Container for the image gallery -->
					<div class="container anh">

					  	<div class="mySlides">
					    
					      	<img src="anhphu/anhbana.jpg" style="height: 300px; width: 100%;">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/bana2.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/bana3.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/bana4.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/bana5.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/anhbana.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<!-- Next and previous buttons -->
					  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  	<a class="next" onclick="plusSlides(1)">&#10095;</a>

					  	<!-- Image text -->
					  

					  	<!-- Thumbnail images -->
					  	<div class="row" style="padding-left:15px;padding-right: 15px; ">
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/anhbana.jpg" style="width:100%;height: 70px;" onclick="currentSlide(1)" >
					    	</div>
					    	<div class="column"> 
					      		<img class="demo cursor" src="anhphu/bana2.jpg" style="width:100%;height: 70px;" onclick="currentSlide(2)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/bana3.jpg" style="width:100%;height: 70px;" onclick="currentSlide(3)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/bana4.jpg" style="width:100%;height: 70px;" onclick="currentSlide(4)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/bana5.jpg" style="width:100%;height: 70px;" onclick="currentSlide(5)" >
					    	</div> 
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/anhbana.jpg" style="width:100%;height: 70px;" onclick="currentSlide(6)" >
					    	</div>
					  	</div>
					</div>
				</div>
			</div>

		</div>
		<div class="phai">
			<div style="width: 100%;background-color: #f5f5f5;height: 300px;">
				<div style="font-size: 15px;font-weight: bold; padding-top: 40px;padding-left: 10px;">Tại sao nên đăng ký tour cùng Dulichs.org?</div>
				<div class="khung" style="border-bottom: 1px solid #bebebe;">
					<i class="fas fa-dollar-sign"></i>
					<span>Giá tour đảm bảo tốt nhất</span>
				</div>
				<div class="khung" style="border-bottom: 1px solid #bebebe;">
					<i class="fas fa-phone"></i>
					<span>Phục vụ khách hàng 24/24h</span>
				</div>
				<div class="khung" style="border-bottom: 1px solid #bebebe;">
					<i class="fas fa-star"></i>
					<span>Chương trình tour phong phú</span>
				</div>
				<div class="khung">
					<i class="far fa-life-ring"></i>
					<span>Miễn phí bảo hiểm du lịch</span>
				</div>
			</div>
			<div class="bg-khung">
				<div style="font-weight: bold;font-size: 24px; padding-top: 30px; padding-left: 30px; color: #fff;">Cần giải đáp thắc mắc?</div>
				<div style="padding-left: 30px;padding-top: 20px; color: #fff;font-size: 14px;margin-right: 20px;">Đừng ngại gọi điện cho chúng tôi, chúng tôi rất vui khi được tư vấn cũng như giải đáp thắc mắc của bạn!</div>
				<div style="margin-top: 20px; margin-left: 30px;">
					<i style="color: #ffcf2a;" class="fas fa-phone"></i>
					<span style="font-weight: bold;margin-left: 10px;color: #484848;
					font-size: 20px;">0384.227.810</span>
				</div>
				<div style="margin-top: 20px; margin-left: 30px;">
					<i style="color: #ffcf2a;" class="far fa-envelope"></i>
					<span style="font-weight: bold;margin-left: 10px;color: #fff;
					font-size: 15px;">senvangonline@gmail.com</span>
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
		          <a class="btn btn-primary" href="amthuc.php">Đăng xuất</a>
		        </div>
	      	</div>
	    </div>
	</div>
<script type="text/javascript">
	function DKtour(){
	  var ten = document.getElementById('Tentour').innerText;
	  document.getElementById('Ttour').value= ten;
	  var gia = document.getElementById('Giatour').innerText;
	  document.getElementById('Gtour').value=gia;

	}
	function Dky(){
		alert('Đăng ký tour thành công !');
		location.reload();
	}
</script>
</body>
<script type="text/javascript" src="bana.js"></script>
</html
