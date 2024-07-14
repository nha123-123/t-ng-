<?php
require_once "Models/Model.php";
require_once "Views/View.php";

class Controller
{
	var $model, $view;
	public function __construct()
	{
		$this->view = new View();
		$this->model = new Model();
	}

	public function getHomePage()
	{
		$this->view->getHomePage();
	}


	public function danhsachsp()
	{
		$listSP = $this->model->getDataSanPham();
		$this->view->danhsachsp($listSP);
		
	}

	public  function themsanpham()
	{
		$listNSX = $this->model->getDataNhaSX();
		$this->view->themsanpham($listNSX);
	}

	public function themsanphammoi($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai,$thongtinthem)
	{
		$result = $this->model->themsanphammoi($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai,$thongtinthem);
		$this->view->getHomePage();
	}

	public  function deleteSanPham()
	{
		$this->model->deleteSanPham();
		header("location:index.php?task=danhsachsp");
	}
	
	public function editSanPham()
	{
		$result = $this->model->editSanPham();
		$listNSX = $this->model->getDataNhaSX();
		$this->view->editSanPham($result,$listNSX); 
	}
	public function editSanPham1($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem)
	{
		$result = $this->model->editSanPham1($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem);
		$message = "Sua thong tin thanh cong";
		echo "<script type='text/javascript'> alert('$message');
		</script>";
		$listNSX = $this->model->getDataNhaSX();
		$result = $this->model->editSanPham();
		header('location:http://localhost/TEST/index.php?task=danhsachsp');
	}
}
