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
		public function index($rs)
		{
			require_once 'view/index.php';
		}
		public function upDate($sp="")
		{
			require_once'view/sua.php';
		}
		public function quanlydk($nd)
		{
			require_once 'view/tables.php';
		}
		public function quanlytk($tk)
		{
			require_once 'view/qltk.php';
		}
	}
 ?>