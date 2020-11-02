<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DA NANG FANTASTICITY</title>
	<link rel="stylesheet" type="text/css" href="hoian.css">
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
					<div id="Tentour" style="font-size: 30px; font-weight: bold;">Du lịch Đà Nẵng: ĐÀ NẴNG – HỘI AN – HUẾ</div>
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
						<div id="Giatour" style="padding-top: 23px; height: 100px;font-size: 25px;font-weight: bold; color: #fff; text-align: center;background: linear-gradient(to right, #4675e7 , #4692e7); ">3.600.000 vnđ</div>
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
				<div style="padding-right: 20px;">
					<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : Hàng ngày</span></div>
					<div class="time"><i class="fas fa-plane-arrival"></i><span style="margin-left: 24px;">Đà Nẵng, Phong Nha, Ngũ Hành Sơn, Huế, Hội An</span></div>
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
					<div class="time2"><i  style="color: #4692e7;" class="far fa-eye"></i><span style="margin-left: 10px;">1220</span></div>
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
					<div>Theo Con đường di sản, Quý khách lần lượt đi qua những địa danh nổi tiếng miền Trung đầy nắng và gió Lào để đến với một Động Phong Nha diễm lệ mà kỳ bí, Cố Đô Huế nhẹ nhàng sâu lắng mà trầm mặc, Phố Cổ Hội An cổ kính mà thanh tao và con bao điều thú vị khác đang chào đón Quý khách…</div>
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
						          <span style="font-weight: bold; font-size: 15px;"> ĐÀ NẴNG – NGŨ HÀNH SƠN - ĐÔ THỊ CỔ HỘI AN </span>
						        </button>
						      </h2>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>– Sáng: Đón khách theo điểm hẹn tai tại Đà Nẵng (từ 07h30 đến 08h00). Khởi hành tham quan khu di tích – danh thắng Ngũ Hành Sơn (khám phá các hang động, vãn cảnh đẹp non nước trời mây, viếng những ngôi chùa thiêng), Làng Nghề Điêu Khắc Đá Non Nước. Tiếp tục vào Hội An nhận phòng KS nghỉ ngơi.</p>
								<p>– Trưa: Ăn trưa nhà hàng tại Hội An</p>
								<p>– Chiều: Bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Bảo tàng văn hóa Sa Huỳnh, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ – thưởng thức ca nhạc truyền thống lúc 15h15.</p>
								<p>– Tối: Ăn tối nhà hàng, thưởng thức đặc sản Hội An (Cao Lầu – Bánh Bao – Bánh Vạc – Hoành Thánh). Tự do thưởng ngoạn vẻ đẹp Phố Cổ Hội An, rực rỡ soi bóng bên dòng sông Hoài, từng là thương cảng sầm uất của người Chăm thế kỉ thứ II và Việt Nam từ thế kỉ XVI</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <span style="color: #000; font-weight: bold;">Ngày 2</span>
						          <span style="font-weight: bold; font-size: 15px;">CỐ ĐÔ HUẾ</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>– Sáng: Điểm tâm. Rời Hội An đi Cố Đô Huế – Di sản văn hoá Thế Giới, ghé tham quan mua sắm tại Siêu Thị Đặc Sản Miền Trung, tiếp tục hành trình xuyên hầm đường bộ đèo Hải vân, dừng chân chụp ảnh làng Chài Lăng Cô.</p>
						        <p>– Trưa: Ăn trưa nhà hàng và nhận phòng K/sạn nghỉ ngơi.</p>
						        <p>– Chiều: Tham quan Đại Nội (Hoàng Cung của 13 vị vua triều Nguyễn, triều đại phong kiến cuối cùng của Việt Nam: Ngọ Môn, Điện Thái Hoà, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh) và Chùa Thiên Mụ cổ kính, xây dựng từ những năm đầu của thế kỉ XVII.</p>
						        <p>– Tối: Ăn tối nhà hàng với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái,…). Ngồi thuyền Rồng nghe CA HUẾ và thả hoa đăng cầu may trên dòng Hương thơ mộng.</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						         <span style="color: #000; font-weight: bold;">Ngày 3</span>
						         <span style="font-weight: bold; font-size: 15px;">HUẾ - PHONG NHA</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>– Sáng: Điểm tâm sớm. Rời Huế đi Phong Nha – Kẻ Bàng – Di Sản Thiên Nhiên Thế Giới. Viếng thăm Thánh Địa La Vang (Được phong tặng là Tiểu Vương Cung Thánh Đường) và chụp ảnh Vĩ tuyến 17 – Cầu Hiền Lương – Sông Bến Hải (Giới tuyến tạm thời chia cắt 2 miền Nam – Bắc suốt 20 năm từ 1954-1973).</p>
						        <p>– Trưa: Ăn trưa nhà hàng tại Phong Nha.</p>
						        <p>– Chiều: Ngồi thuyền ngược sông Son chinh phục động Phong Nha: hang Bi Ký, Cô Tiên & Cung Đình dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng ngàn thiên niên kỷ. Khởi hành về Huế theo đường Trường Sơn – Hồ Chí Minh Huyền Thoại.</p>
						        <p>– Tối: Ăn tối nhà hàng và ngủ K/sạn tại Huế. Quý khách tự do thưởng ngoạn vẻ đẹp Cố Đô về đêm với cầu Tràng Tiền rực rỡ sắc màu.</p>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingFour">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
						         <span style="color: #000; font-weight: bold;">Ngày 4</span>
						         <span style="font-weight: bold; font-size: 15px;">Tiễn khách</span>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>– Sáng: Điểm tâm. Tham quan lăng Tự Đức – lãng mạn, trữ tình phản ánh chính cuộc đời của vị vua tài hoa nhưng gặp phải tình cảnh đất nước éo le, lăng Khải Định lộng lẫy- kết hợp tinh xảo hai nền kiến trúc, văn hoá Đông – Tây; mua sắm đặc sản chợ Đông Ba.</p>
						        <p>– Trưa: Ăn trưa nhà hàng.</p>
						        <p>– Chiều: Tiễn khách ga Huế/ sân bay Huế từ 14h00 đến 17h00 và sân bay Đà Nẵng từ 17h00 đến 23h00. Chào thân ái tiễn khách. Kết thúc chương trình. (sau thời gian này, khách tự túc ra sân bay hoặc phụ thu xe tiễn)</p>
						        
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
						<div>Ô tô</div>
						<div>Thứ 5 và thứ 7 hàng tuần</div>
						<div style="color: red;font-weight: bold;">3.600.000 VNĐ</div>
					</div>
				</div>
				<div class="luuy">
					<div style="font-size: 16px;">Bao gồm :</div>
					<div>
						<div>– Xe vận chuyển tốt đời mới đón – tiễn và phục vụ theo chương trình.(15, 25, 35, 45 chỗ tùy theo số lượng khách của mỗi tour) </div>
						<div>– Ngủ 2khách/phòng khách sạn tiện nghi 3 sao tiện nghi :hệ thống máy nước nóng lạnh, ĐT, phòng tắm riêng, phòng 2-3 người…
						<br>
						trường hợp lẻ nam, lẻ nữ:  ngủ phòng ba
						<br>
						trường hợp đi 1 người, phụ thu phòng đơn nếu không tìm được người ghép</div>
						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 04 bữa trưa + 03 bữa tối tiêu chuẩn 100,000 VNĐ/suất (thưởng thức đặc sản Hội An & Huế)</div>
						<div>– Ca Huế sông Hương: Thuyền Rồng, Nhạc Công, Ca sĩ + Thả hoa đăng cầu may.</div>
						<div>– Thuyền du lịch Phong Nha.</div>
						<div>– Vé tham quan các điểm.</div>
						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>
						
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
					    
					      	<img src="anhphu/hoian2.jpg" style="height: 300px; width: 100%;">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/hoian.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/Cau1.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="anhphu/duongtranphu.jpg" style="height: 300px; width:100%">
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
					      		<img class="demo cursor" src="anhphu/hoian2.jpg" style="width:100%;height: 70px;" onclick="currentSlide(1)" >
					    	</div>
					    	<div class="column"> 
					      		<img class="demo cursor" src="anhphu/hoian.jpg" style="width:100%;height: 70px;" onclick="currentSlide(2)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/Cau1.jpg" style="width:100%;height: 70px;" onclick="currentSlide(3)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="anhphu/duongtranphu.jpg" style="width:100%;height: 70px;" onclick="currentSlide(4)" >
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
</html>
