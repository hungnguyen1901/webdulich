<?php 
	/**
	 * 
	 */
	class View
	{
		
		function __construct()
		{
			# code...
		}
		public function index($tb='')	
		{
			require_once 'view/index.php';
		}
		public function tours($name)
		{
			
			require 'trangcon/'.$name.'.php';
		}
		public function dattour($rs)
		{
			require_once 'view/dattour.php';
		}
		public function amthuc()
		{
			require_once 'view/amthuc.php';
		}
		public function lienhe()
		{
			require_once 'view/lienhe.php';
		}
		public function themtour()
		{
			require_once 'view/dattour.php';
		}
		public function chitiettour($ct, $tb='')
		{
			require_once 'view/chitiettour.php';
		}
		
	}
 ?>