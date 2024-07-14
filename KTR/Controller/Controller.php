<?php 
require_once "Models/Model.php";
require_once "Views/View.php";

class Controller {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    public function getPageForm() {
       
        $listNSX = $this->model->layDanhSachNSX();
        $this->view->getPageForm($listNSX);
    }

    public function addProduct($ma_nhasx, $tennhasx, $ma_sp, $ten_sp, $ngaysx, $dongia) {
    if (empty($ma_nhasx) || empty($tennhasx) || empty($ma_sp) || empty($ten_sp) || empty($ngaysx) || empty($dongia)) {
        $message = "Không được để trống!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        
        $result = $this->model->addProduct($ma_nhasx, $tennhasx, $ma_sp, $ten_sp, $ngaysx, $dongia);
        if ($result) {
            echo "<script type='text/javascript'>alert('Thêm sản phẩm thành công');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Thêm sản phẩm thất bại');</script>";
        }
    }
  
    $this -> view -> getaddProduct(); 
}

}
?>
