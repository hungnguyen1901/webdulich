<?php
	/**
	  * 
	  */
	 class Controller
	 {
	 	
	 	public $view;
		public $model;
		
		function __construct()
		{
			require_once 'view.php';
			$this->view= new View();
			require_once 'model.php';
			$this->model= new Model();
		}
		public function test($value='')
		{
			
		}
		public function index()
		{
			$this->view->index();
		}
		public function amthuc()
		{
			$this->view->amthuc();
		}
		public function lienhe()
		{
			$this->view->lienhe();
		}
		public function dattour()
		{
			if(isset($_POST['Search'])){
				$key = $_POST['key'];
				$rs = $this->model->search($key);
				$this->view->dattour($rs);
			}else{
				$listhh= $this->model->getList();
				$this->view->dattour($listhh);
			}
			
		}
		public function logout()
		{
			session_destroy();
			header('location: index.php');
			die();
		}
		
		function tour(){
			if(isset($_GET['tours'])&&$_GET['tours']!=''){
				$tours = $_GET['tours'];
				require_once 'view.php';
				$View = new View();
				$View->tours($tours);
			}else{
				echo "string";
			}
		}
		public function login()
		{

			if (isset($_POST['submit'])) {

				if ($_POST['Username']!='' && $_POST['Password']!='') {
					$ten=$_POST['Username'];
					$mk=$_POST['Password'];
				}
				$result=$this->model->login($ten,$mk);
				$row=$result;
				if ($row) {
					session_start();
					$_SESSION['tendn']=$row['tendn'];
					$_SESSION['matkhau']=$row['matkhau'];
					header("location: index.php");
				}
				else{
					header("location: index.php");
				}
				
			}
			

		}
		public function registration()
		{
			if(isset($_POST['Ghi'])){
				$ten=$_POST['hoten'];
				$tendn=$_POST['tendangnhap'];
				$pw=$_POST['Password'];
				$rpw=$_POST['Repassword'];
				$em=$_POST['email'];
				$user = array('hoten' => $ten,'tendangnhap'=>$tendn,'Password'=>$pw,'Repassword'=>$rpw,'email'=>$em );
				if($this->model->ktra($tendn)==true && $pw==$rpw)
					{
						$this->model->registration($user);
						$thongbao='Tạo tài khoản thành công';
						$this->view->index($thongbao);
					}
				elseif ($this->model->ktra($tendn)==false) {
					$thongbao='Tên đăng nhập đã tồn tại';
					$this->view->index($thongbao);
				}
				elseif ($pw!=$rpw) {
					$thongbao='Nhập lại pass không đúng';
					$this->view->index($thongbao);
				}
			}
		}
		public function dangkitour()
		{
			if(isset($_POST['submit'])){
				$ten=$_POST['tendk'];
				$sdt=$_POST['sdtdk'];
				$nametour=$_POST['tentour'];
				$cost=$_POST['giatour'];
				$em=$_POST['email'];
				$user = array('tendk' => $ten,'sdtdk'=>$sdt,'tentour'=>$nametour,'giatour'=>$cost,'email'=>$em );
				
				$result=$this->model->dangkitour($user);
				if($result){
					$tb="Đăng ký thành công!";
				}else{
					$tb="Đăng ký thất bại!";
				}
				if (isset($_GET['id'])) {
					$id=$_GET['id'];
				}
				$list=$this->model->chitiettour($id);
				$this->view->chitiettour($list, $tb);
				// header('location: index.php?action=chitiettour&id='.$id);
				
			}
			else{
				echo "Thất bại";
			}
		}
		public function themtour()
		{
			if (isset($_POST['Themtour'])) {
				$MaT=$_POST['MaT'];
				$TenT=$_POST['TenT'];
				$Tgian=$_POST['Tgian'];
				$Diadiem=$_POST['Diadiem'];
				$Khoihanh=$_POST['Khoihanh'];
				$Gia=$_POST['Gia'];
				
				if(isset($_FILES['imgM'])&&$_FILES['imgM']['error']==0){
					$url = 'img/'.$_FILES['imgM']['name'];
					move_uploaded_file($_FILES['imgM']['tmp_name'], $url);
				}else{
					echo "Lỗi!";
				}
				if(isset($_FILES['imgC'])&&$_FILES['imgC']['error']==0){
					$url = 'img/'.$_FILES['imgC']['name'];
					move_uploaded_file($_FILES['imgC']['tmp_name'], $url);
				}else{
					echo "Lỗi!";
				}
				$Thongtin=$_POST['Thongtin'];
				$Uudai=$_POST['Uudai'];
				$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'imgM'=>$url,'imgC'=>$url,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai);
				
				$add=$this->model->addTour($sp);
				if ($add){
					echo "them TC";
					$rs=$this->model->getList();
					$this->view->dattour($rs);
				}else{
					echo "Them TB";
				}
			}
		}
		public function chitiettour($id='', $tb='')
		{
			if (isset($_GET['id'])&&$_GET['id']!="" || $id!='') {
					if($id==''){
						$id=$_GET['id'];
					}
					$list=$this->model->chitiettour($id);
					$this->view->chitiettour($list, $tb);
						
				}else{
					header('location: index.php');
				}
		}
		

	 } 
 ?>