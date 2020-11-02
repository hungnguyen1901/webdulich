
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>DA NANG FANTASTICITY</title>
	<style type="text/css">
		.home >a:hover{
		  text-decoration: none;
		  color: white;
		  font-weight: bold;
		  font-size: 20px; 
		}
	</style>
</head>
<htm>
<body>
	<?php if ($tb!=''): ?>
		<div class="alert alert-warning"><?php echo $tb; ?></div>
	<?php endif ?>
	<div class="container-fluid bg-main" style="background-image: url(<?php echo($ct['anh_thumb']) ?>); height: 550px;">
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

	<div class="container-fluid" style="background: #bebebe;">
		<div class="container">
			<div class="tour">
				<div style=" margin-top: 30px;">
					<div id="Tentour" style="font-size: 30px; font-weight: bold;">Du lịch Đà Nẵng: <?php echo $ct['ten']; ?></div>
					<div class="danhgia">
						<div style="font-size: 20px;">Đánh giá :</div>
						<div class="stars" style="margin-left: 10px; margin-top:2px;">
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
						<div id="Giatour" style="padding-top: 23px; height: 100px;font-size: 25px;font-weight: bold; color: #fff; text-align: center;background: linear-gradient(to right, #4675e7 , #4692e7); "><?php echo number_format($ct['gia']); ?> vnđ</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #e1e1e1;height: 150px;">
		<div class="container tou">
			<div class="tou2">
				<div>
					<div class="time"><i class="far fa-clock"></i><span style="margin-left: 30px;"><?php echo $ct['tgian']; ?></span></div>
					<div class="time"class="time"><i class="fas fa-plane-departure"></i><span style="margin-left: 24px;"><?php echo $ct['diadiem']; ?></span></div>
				</div>
				<div>
					<div class="time"><i class="far fa-calendar-alt"></i><span style="margin-left: 30px;">Khởi hàng : <?php echo $ct['khoihanh']; ?></span></div>
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
					        				<form action="index.php?action=dangkitour&id=<?php echo($ct['id']) ?>" method="POST" style="margin-left: 30%;">
					        					
												<div class="form-group">
												    <label>Họ Tên</label>
												    <input type="text" class="form-control" name="tendk" Required="" style="width: 400px;">
											  	</div>
											  	<div class="form-group">
												    <label>Số điện thoại</label>
												    <input  type="number"  class="form-control" name="sdtdk" required="" style="width: 400px;">
											  	</div>
											  	<div class="form-group">
												    <label>Tên tour</label>
												    <input id="Ttour" type="text" class="form-control" name="tentour"style="width: 400px;" readonly="">
											  	</div>
											  	<div class="form-group">
												    <label>Giá tour</label>
												    <input id="Gtour" type="text" class="form-control" name="giatour"style="width: 400px;" readonly="">
											  	</div>
											  	<div class="form-group">
												    <label>E-mail</label>
												    <input type="Email" Required="" class="form-control" name="email"style="width: 400px;">
											  	</div>
											  	<div class="d-flex justify-content">
											  		<!-- <button type="submit" name="submit" class="btn btn-primary">Đăng ký đặt tour</button> -->
											  		<button type="type" name="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Đăng ký đặt tour</button>

													<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
													  <div class="modal-dialog modal-sm">
													    <div class="modal-content">
													      Đăng kí đặt tour thành công
													    </div>
													  </div>
													</div>
											  		
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
					<div><?php echo $ct['thongtin']; ?></div>
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
						<?php echo $ct['uudai']; ?>
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
						<?php
						$i=0; 
						foreach ($ct['chitietct'] as $chitiet) {
							
						?>
						
						<div class="card">
						    <div class="card-header" id="heading-<?php echo  $chitiet['id'];?>">
						      <h2 class="mb-0">
						        <a class="btn btn-link collapsed" role="button" href="#collapse-<?php echo  $chitiet['id'];?>" data-toggle="collapse" aria-expanded="false">
						          <span style="color: #000; font-weight: bold;">Ngày <?php echo $chitiet['ngay']; ?></span>

						          <span style="font-weight: bold; font-size: 15px;"><?php echo $chitiet['ten']; ?></span>
						        </a>
						      </h2>
						    </div>

						    <div id="collapse-<?php echo  $chitiet['id'];?>" class="collapse <?php if($i==0) echo "show";?>">
						      <div class="card-body">
						        <?php echo $chitiet['noidungngay']; ?>
						      </div>
						    </div>
						</div>

					<?php
					$i++;
					 } ?>
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
						<div><?php echo $ct['chitietgia']['phuongtien']; ?></div>
						<div><?php echo $ct['chitietgia']['lichkhoihanh']; ?></div>
						<div style="color: red;font-weight: bold;"><?php echo number_format($ct['gia']); ?></div>
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
					    
					      	<img src="img/anhbana.jpg" style="height: 300px; width: 100%;">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="img/bana2.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="img/bana3.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="img/bana4.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="img/bana5.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<div class="mySlides">
					    
					      	<img src="img/anhbana.jpg" style="height: 300px; width:100%">
					  	</div>

					  	<!-- Next and previous buttons -->
					  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  	<a class="next" onclick="plusSlides(1)">&#10095;</a>

					  	<!-- Image text -->
					  

					  	<!-- Thumbnail images -->
					  	<div class="row" style="padding-left:15px;padding-right: 15px; ">
					    	<div class="column">
					      		<img class="demo cursor" src="img/anhbana.jpg" style="width:100%;height: 70px;" onclick="currentSlide(1)" >
					    	</div>
					    	<div class="column"> 
					      		<img class="demo cursor" src="img/bana2.jpg" style="width:100%;height: 70px;" onclick="currentSlide(2)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="img/bana3.jpg" style="width:100%;height: 70px;" onclick="currentSlide(3)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="img/bana4.jpg" style="width:100%;height: 70px;" onclick="currentSlide(4)" >
					    	</div>
					    	<div class="column">
					      		<img class="demo cursor" src="img/bana5.jpg" style="width:100%;height: 70px;" onclick="currentSlide(5)" >
					    	</div> 
					    	<div class="column">
					      		<img class="demo cursor" src="img/anhbana.jpg" style="width:100%;height: 70px;" onclick="currentSlide(6)" >
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
<script type="text/javascript">
	function DKtour(){
	  var ten = document.getElementById('Tentour').innerText;
	  document.getElementById('Ttour').value= ten;
	  var gia = document.getElementById('Giatour').innerText;
	  document.getElementById('Gtour').value=gia;

	}
	function Dky(){
		location.reload();
	}
</script>
</body>
<script type="text/javascript" src="bana.js"></script>
</html
