<?php 
	/**
	 * 
	 */
	class Model 
	{
		public $conn;
		function __construct()
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
			$sql="SELECT * FROM `users` WHERE username='".$un."' and password='".$pw."'";
			$results= $this->conn->query($sql);
			//var_dump($results);
			if ($results->num_rows >0) {
				return $results->fetch_assoc();
			}else{
				return null;
			}
		}
		public function getList()
		{
			$sql="SELECT * FROM tour";
			$result=$this->conn->query($sql);
			if ($result->num_rows >0) {
				return $result;
			}else{
				 echo "Sai do";
			}

		}
		public function gettour($id)
		{
			$sql= "select * from tour WHERE id='$id'";
			$results= $this->conn->query($sql);
			// s
			if ($results->num_rows >0) {
				return $results->fetch_assoc();
			}else{
				return null;
			}
		}
		public function upDate($tour)
		{
			if (isset($tour['imgM']) && isset($tour['imgC'])) {
					$sql="UPDATE `tour` SET `id`='".$tour['MaT']."',`ten`='".$tour['TenT']."',`tgian`='".$tour['Tgian']."',`diadiem`='".$tour['Diadiem']."',`khoihanh`='".$tour['Khoihanh']."',`gia`='".$tour['Gia']."',`anh_thumb`='".$tour['imgM']."',`anh`='".$tour['imgC']."' WHERE id='".$tour['MaT']."'";
				}elseif (isset($tour['imgM']) && !isset($tour['imgC'])) {
					$sql="UPDATE `tour` SET `id`='".$tour['MaT']."',`ten`='".$tour['TenT']."',`tgian`='".$tour['Tgian']."',`diadiem`='".$tour['Diadiem']."',`khoihanh`='".$tour['Khoihanh']."',`gia`='".$tour['Gia']."',`anh_thumb`='".$tour['imgM']."' WHERE id='".$tour['MaT']."'";
				}
				elseif (isset($tour['imgC']) && !isset($tour['imgM'])) {
					$sql="UPDATE `tour` SET `id`='".$tour['MaT']."',`ten`='".$tour['TenT']."',`tgian`='".$tour['Tgian']."',`diadiem`='".$tour['Diadiem']."',`khoihanh`='".$tour['Khoihanh']."',`gia`='".$tour['Gia']."',`anh`='".$tour['imgC']."' WHERE id='".$tour['MaT']."'";
				}elseif (!isset($tour['imgM']) && !isset($tour['imgC'])) {
					$sql="UPDATE `tour` SET `id`='".$tour['MaT']."',`ten`='".$tour['TenT']."',`tgian`='".$tour['Tgian']."',`diadiem`='".$tour['Diadiem']."',`khoihanh`='".$tour['Khoihanh']."',`gia`='".$tour['Gia']."' WHERE id='".$tour['MaT']."'";
				}
			$results= $this->conn->query($sql);
			// s
			if ($results) {
				return $results;
			}else{
				return false;
			}
		}
		public function delete($id)
		{
			$sql1="SELECT chitietgia.id FROM tour, giatour, chitietgia WHERE tour.id = $id AND giatour.id_tour=tour.id AND chitietgia.id_gia = giatour.id";
			// var_dump($sql1);
			// echo "<br>";
			$result=$this->conn->query($sql1);
			$arr = array();
			foreach ($result as $key) {
				$arr[] = $key;
				$sql = "DELETE FROM chitietgia where id = ".$key['id'];
				$this->conn->query($sql);
				echo $sql;
				echo "<br>";
			}
			// echo "<pre>";
			print_r($arr);
			$sql2 = "DELETE FROM giatour where id_tour = ".$id;
			$rs2 = $this->conn->query($sql2);
			if($rs2){
				// echo $sql2;
				// echo "<br>";
				$sql3 = "DELETE FROM chuongtrinh where id_tour = ".$id;
				$rs3 = $this->conn->query($sql3);
				if($rs3){
					// echo $sql3;
					// echo "<br>";
					$sql4 = "DELETE FROM tour where id = ".$id;
					$rs4 = $this->conn->query($sql4);
					if($rs4){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		public function quanlydk()
		{
			$sql="SELECT * FROM ttdk";
			$result=$this->conn->query($sql);
			if ($result->num_rows >0) {
				return $result;
			}else{
				 echo "Sai do";
			}
		}
		public function quanlytk()
		{
			$sql="SELECT * FROM ttnd";
			$result=$this->conn->query($sql);
			if ($result->num_rows >0) {
				return $result;
			}else{
				 
			}
		}
		public function deletetk($idd)
		{
			$sql= "DELETE FROM ttnd where id_ng = ".$idd;
			$rs = $this->conn->query($sql);
			if($rs){
				return true;
			}else{
				return false;
			}
		}
		public function deletedt($idd)
		{
			$sql= "DELETE FROM ttdk where id_dk = ".$idd;
			$rs = $this->conn->query($sql);
			if($rs){
				return true;
			}else{
				return false;
			}
		}
		public function updatedt($dt){
			$sql="UPDATE `ttdk` SET `tthai`='Duyệt tour' WHERE id_dk = ".$dt;
			$results= $this->conn->query($sql);
			
			if ($results) {
				return $results;
			}else{
				return false;
			}
		}
		public function them($tour)
		{
			$sql= "INSERT INTO `tour` (`ten`, `tgian`, `diadiem`, `khoihanh`, `gia`, `anh_thumb`, `anh` , `thongtin` , `uudai` , `phuongtien` , `lichkh` ) VALUES ('".$tour['TenT']."', '".$tour['Tgian']."', '".$tour['Diadiem']."', '".$tour['Khoihanh']."', '".$tour['Gia']."', '".$tour['imgM']."', '".$tour['imgC']."','".$tour['Thongtin']."','".$tour['Uudai']."','".$tour['Phuongtien']."','".$tour['Lichkh']."')";
			$rs = $this->conn->query($sql);
			if($rs){
				return true;
			}else{
				return false;
			}
		}
		
	}
 ?>