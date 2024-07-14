<?php 
require_once "Controller/Controller.php";

session_start();

// Khởi tạo Controller
$controller = new Controller();

// Lấy task từ tham số truyền vào
$task = isset($_GET['task']) ? $_GET['task'] : null;

// Lấy dữ liệu từ form
$ma_nhasx = isset($_POST['ma_nhasx']) ? $_POST['ma_nhasx'] : null;
$ten_nhasx = isset($_POST['ten_nhasx']) ? $_POST['ten_nhasx'] : null;
$ma_sp = isset($_POST['ma_sp']) ? $_POST['ma_sp'] : null;
$ten_sp = isset($_POST['ten_sp']) ? $_POST['ten_sp'] : null;
$ngaysx = isset($_POST['ngaysx']) ? $_POST['ngaysx'] : null;
$dongia = isset($_POST['dongia']) ? $_POST['dongia'] : null; // Xóa khoảng trắng không cần thiết

// Xử lý khi form được gửi đi
if (isset($_POST['getPageForm'])) {
    if (empty($ma_nhasx) || empty($ten_nhasx) || empty($ma_sp) || empty($ten_sp) || empty($ngaysx) || empty($dongia)) {
        $message = "Không được để trống!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } elseif (isset($ma_nhasx) && isset($ten_nhasx) && isset($ma_sp) && isset($ten_sp)  && isset($ngaysx) && isset($dongia) ){
        $Controller -> addProduct($ma_nhasx, $ten_nhasx, $ma_sp, $ten_sp, $ngaysx, $dongia);
    }
}

// Chuyển hướng đến trang tương ứng
switch ($task) {
    case 'pageform':
        $Controller -> getPageForm();
        break;
    case 'addProduct':
        $Controller -> getaddProduct();
        break;
    default:
        $Controller -> getPageForm();
        break;
}

?>
