<?php
require_once "Controllers/Controller.php";
session_start();
//controller
$Controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : null;
//login
$ma_sp = isset($_POST['ma_sp']) ? $_POST['ma_sp'] : null;
$ten_sp = isset($_POST['ten_sp']) ? $_POST['ten_sp'] : null;
$ma_nhasx = isset($_POST['ma_nhasx']) ? $_POST['ma_nhasx'] : null;
$khuyenmai = isset($_POST['khuyenmai']) ? $_POST['khuyenmai'] : null;
$thongtinthem = isset($_POST['thongtinthem']) ? $_POST['thongtinthem'] : null;



if (isset($_POST['themsanpham'])) {
	if (empty($ma_sp) || empty($ten_sp) || empty($ma_nhasx) || empty($thongtinthem) ) {
		$messager = "Vui long nhap day du !!!";
		echo "<script type='text/javascript'> alert('$messager');
		</script>";
	} elseif (isset($ma_sp) && isset($ten_sp) && isset($ma_nhasx)) {
		$Controller->themsanphammoi($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem);
	}
}

if (isset($_POST['editsanpham'])) {
	$Controller->editSanPham1($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem );
}

switch ($task) {
	case 'home':
		$Controller->getHomePage();
		break;

	case 'danhsachsp':
		$Controller->danhsachsp();
		break;

	case 'themsanpham':
		$Controller->themsanpham();
		break;

	case 'deletesanpham':
		$Controller->deleteSanPham();
		break;

	case 'editsanpham':
		$Controller->editSanPham();
		break;

	default:
		$Controller->getHomePage();
		break;
}
