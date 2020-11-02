<?php 
	/**
	 * 
	 */
	class Model
	{
		public $conn; 
		public function __construct()
		{
			$host="localhost";
			$username="root";
			$pass="";
			$bd= "qlda1";

			$this->conn= new mysqli($host, $username, $pass, $bd);
			mysqli_set_charset($this->conn, 'UTF8');
			// var_dump($this->conn); exit();
			if ($this->conn->connect_error) {
				exit("co loi".$this->conn->connect_error);
			}else{
				
			}
		}

		public function login($un,$pw)
		{
			$sql="SELECT * FROM `ttnd` WHERE tendn='".$un."' AND matkhau='".$pw."'";
			$results= $this->conn->query($sql);
			var_dump($results);
			if ($results->num_rows>0) {
				return $results->fetch_assoc();
			}else{
				return null;
			}
		}
		public function registration($user)
		{
			$sql="INSERT INTO `ttnd`(`id_ng`, `hoten`, `tendn`, `matkhau`, `email`, `remk`) VALUES ('','".$user['hoten']."','".$user['tendangnhap']."','".$user['Password']."','".$user['email']."','".$user['Repassword']."')";
			$results=$this->conn->query($sql);
			if ($results) {
				return true;
			}else{
				echo "có lỗi";
				return false;
			}
		}
		public function search($key='')
		{
			$sql = "SELECT * from tour where ten like '%$key%' OR diadiem like '%$key%'";
			$rs = $this->conn->query($sql);
			if($rs)
				return $rs;
			else
				return null;
		}
		public function ktra($ten)
		{
			$sqll="SELECT tendn FROM ttnd WHERE tendn='".$ten."'";
			$results=$this->conn->query($sqll);
			if ($results->num_rows>0) {
				return false;
			}else{
				return true;
			}
		}
		public function dangkitour($user)
		{
			$sql="INSERT INTO `ttdk`(`hoten`, `sdt`, `tentour`, `giatour`, `email`,`tgdk`) VALUES ('".$user['tendk']."','".$user['sdtdk']."','".$user['tentour']."','".$user['giatour']."','".$user['email']."',NOW())";
			$results=$this->conn->query($sql);
			
			if ($results) {
				return true;
			}else{
				return false;
			}
		}
		public function getList()
		{
			$sql="SELECT * FROM tour;";
			$result=$this->conn->query($sql);
			if($result!=null)
			if ($result->num_rows >0) {
				return $result;
			}else{
				return null;
			}

		}
		public function getListCT()
		{
			$sql="SELECT * FROM `chuongtrinh`,giatour,tour WHERE chuongtrinh.id_tour=tour.id AND giatour.id_tour=tour.id";
			$result=$this->conn->query($sql);
			if ($result->num_rows >0) {
				return $result;
			}else{
				return null;
			}
		}
		public function addTour($tour)
		{
			$sql="INSERT INTO `tour`(`id`, `ten`, `tgian`, `diadiem`, `khoihanh`, `gia`, `anh_thumb`, `anh`, `thongtin`, `uudai`) VALUES ('".$tour['MaT']."','".$tour['TenT']."','".$tour['Tgian']."','".$tour['Diadiem']."','".$tour['Khoihanh']."','".$tour['Gia']."','".$tour['imgM']."','".$tour['imgC']."','".$tour['Thongtin']."','".$tour['Uudai']."')";
			var_dump($sql);
			$result =$this->conn->query($sql);
			if ($result) {

				return true;
			}else{
				return false;
			}
		}
		public function chitiettour($id)
		{
			$sql = "SELECT chuongtrinh.id as idct, giatour.id as idgt, tour.* FROM chuongtrinh, giatour, tour WHERE tour.id = ".$id." AND chuongtrinh.id_tour=tour.id AND giatour.id_tour=tour.id";
			$result=$this->conn->query($sql);
			$tour = array();
			if ($result->num_rows >0) {
				$t=$result->fetch_assoc();
				$tour = $t;
				$sql2 = "SELECT * FROM chitietct WHERE id_ct = ".$t['idct'].";";
				$result2=$this->conn->query($sql2);
				if($result2)
				if ($result2->num_rows >0) {
					$tar = array();
					while($t2=$result2->fetch_assoc()){
						$tar[] = $t2;
					}
					$tour['chitietct'] = $tar;
				}
				$sql3 = "SELECT * FROM chitietgia WHERE id_gia = ".$t['idgt'].";";
				$result3=$this->conn->query($sql3);
				if($result3)
				if($result3->num_rows > 0) {
					$t3=$result3->fetch_assoc();
					$tour['chitietgia'] = $t3;
					
				}
				return $tour;
				
			}else{
				return null;
			}
		}
		
	}
 ?>