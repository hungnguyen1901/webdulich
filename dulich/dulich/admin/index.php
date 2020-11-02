<?php 
	session_start();
	require_once 'controller.php';
	$ct = new Controller();
	if(isset($_GET['action'])&&$_GET['action']!=""){
		$a = $_GET['action'];
		$ct->$a();
	}else{
		$ct->index();
	}
 ?>