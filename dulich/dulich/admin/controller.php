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
		public function index()
		{
			$listhh= $this->model->getList();
			$this->view->index($listhh);
		}
		public function logoutadmin()
		{
			session_destroy();
			header("location: index.php?action=loginadmin");
			die();
		}
		public function loginadmin()
		{
			if (isset($_POST['Login'])) {

				if ($_POST['Username']!='' && $_POST['Password']!='') {
					$ten=$_POST['Username'];
					$mk=$_POST['Password'];
				}
				$result=$this->model->login($ten,$mk);
				$row=$result;
				if ($row) {
					session_start();
					$_SESSION['userid']=$row['userid'];
					$_SESSION['username']=$row['username'];
					$_SESSION['password']=$row['password'];
					$_SESSION['level']=$row['level'];
					header("location: index.php");
				}
				else{
					echo "That bai";
					require_once 'view/login.php';
					// header("location: login.php");
				}
			}else{
				require_once 'view/login.php';
			}

		}
		public function upDate()
		{
			if (isset($_POST['submit'])) {
				$MaT=$_POST['MaT'];
				$TenT=$_POST['TenT'];
				$Tgian=$_POST['Tgian'];
				$Diadiem=$_POST['Diadiem'];
				$Khoihanh=$_POST['Khoihanh'];
				$Gia=$_POST['Gia'];
				$Thongtin=$_POST['Thongtin'];
				$Uudai=$_POST['Uudai'];
				$Phuongtien=$_POST['Phuongtien'];
				$Lichkh=$_POST['Lichkh'];
				
				if($_FILES['imgM']['size']!=0){
					$url1 = 'img/'.$_FILES['imgM']['name'];
					move_uploaded_file($_FILES['imgM']['tmp_name'], $url1);
				}else{
					
				}
				if($_FILES['imgC']['size']!=0){
					$url2 = 'img/'.$_FILES['imgC']['name'];
					move_uploaded_file($_FILES['imgC']['tmp_name'], $url2);
				}else{
					
				}
				if (isset($url1) && isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'imgM'=>$url1,'imgC'=>$url2,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh);
				}elseif (isset($url1) && !isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'imgM'=>$url1,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh);
				}
				elseif (isset($url2) && !isset($url1)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'imgC'=>$url2,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh);
				}elseif (!isset($url1) && !isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh);
				}
				
				$update=$this->model->upDate($sp);
				if ($update) {
					header('location: index.php');
				}else{
					echo "that bai";
				}
				if (isset($_GET['id'])&&$_GET['id']!="") {
					$id=$_GET['id'];
					$sp=$this->model->gettour($id);
					$this->view->upDate($sp);
					header('location: index.php');
				}else{
					header('location: index.php');
				}

			}else{
				if (isset($_GET['id'])&&$_GET['id']!="") {
					$id=$_GET['id'];
					$sp=$this->model->gettour($id);
					require_once 'view/sua.php';	
				}else{
					header('location: index.php');
				}
				
			}
		}
		public function themtour(){

			if (isset($_POST['submit'])) {
				$MaT=$_POST['MaT'];
				$TenT=$_POST['TenT'];
				$Tgian=$_POST['Tgian'];
				$Diadiem=$_POST['Diadiem'];
				$Khoihanh=$_POST['Khoihanh'];
				$Gia=$_POST['Gia'];
				$Thongtin=$_POST['Thongtin'];
				$Uudai=$_POST['Uudai'];
				$Phuongtien=$_POST['Phuongtien'];
				$Lichkh=$_POST['Lichkh'];
				
				if($_FILES['imgM']['size']!=0){
					$url1 = 'img/'.$_FILES['imgM']['name'];
					move_uploaded_file($_FILES['imgM']['tmp_name'], $url1);
				}else{
					
				}
				if($_FILES['imgC']['size']!=0){
					$url2 = 'img/'.$_FILES['imgC']['name'];
					move_uploaded_file($_FILES['imgC']['tmp_name'], $url2);
				}else{
					
				}
				if (isset($url1) && isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh,'imgM'=>$url1,'imgC'=>$url2);
				}elseif (isset($url1) && !isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh,'imgM'=>$url1);
				}
				elseif (isset($url2) && !isset($url1)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh,'imgC'=>$url2);
				}elseif (!isset($url1) && !isset($url2)) {
					$sp=array('MaT'=>$MaT,'TenT'=>$TenT,'Tgian'=>$Tgian,'Diadiem'=>$Diadiem,'Khoihanh'=>$Khoihanh,'Gia'=>$Gia,'Thongtin'=>$Thongtin,'Uudai'=>$Uudai,'Phuongtien'=>$Phuongtien,'Lichkh'=>$Lichkh);
				}
				
				$them=$this->model->them($sp);
				if ($them) {
					header('location: index.php');
				}else{
					echo "that bai";
				}
				if (isset($_GET['id'])&&$_GET['id']!="") {
					$id=$_GET['id'];
					$sp=$this->model->gettour($id);
					$this->view->them($sp);
					header('location: index.php');
				}else{
					header('location: index.php');
				}

			}else{
				require_once 'view/them.php';	
			}
		}
		public function delete()
		{
			if (isset($_GET['id'])&& $_GET['id']!="") {
				$id=$_GET['id'];
				$rs=$this->model->delete($id);
				$this->index();
				
			}
		}
		public function deletetk()
		{
			if (isset($_GET['idd'])&& $_GET['idd']!="") {
				$id=$_GET['idd'];
				$rs=$this->model->deletetk($id);
				$this->qltk();
				
			}
		}
		public function deletedt()
		{
			if (isset($_GET['idd'])&& $_GET['idd']!="") {
				$id=$_GET['idd'];
				$rs=$this->model->deletedt($id);
				$this->tables();
				
			}
		}
		public function updatedt()
		{
			if (isset($_GET['dt'])&& $_GET['dt']!="") {
				$id=$_GET['dt'];
				$rs=$this->model->updatedt($id);
				$this->tables();
				
			}
		}
		public function tables()
		{
			$list=$this->model->quanlydk();
			$this->view->quanlydk($list);
		}
		public function qltk()
		{
			$list=$this->model->quanlytk();
			$this->view->quanlytk($list);
		}


	}
 ?>