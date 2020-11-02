<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DA NANG FANTASTICITY</title>	
	<link rel="stylesheet" type="text/css" href="css/hoian.css">
	<link rel="stylesheet" type="text/css" href="css/dattour.css">
	<link rel="stylesheet" type="text/css" href="ttcs.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/amthuc.css">
	<link rel="stylesheet" type="text/css" href="css/lienhe.css">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

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