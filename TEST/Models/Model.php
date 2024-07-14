<?php
// ket noi database
class Model
{
  private $db;
  public function __construct()
  {
    $db = mysqli_connect("localhost", "root", "", "kt1");
    mysqli_set_charset($db, "utf8");
    $this->db = $db;

  }

  public function getDataNhaSX()
  {
    $query = "SELECT * FROM tbl_nhasx";
    $listNSX = mysqli_query($this->db, $query);
    return $listNSX;
  }

  public function getDataSanPham()
  {
    $query = "SELECT * FROM tbl_sanpham";
    $listSP = mysqli_query($this->db, $query);
    return $listSP;
  }

  public function themsanphammoi($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem)
  {

    $query = "INSERT INTO tbl_sanpham (ma_sp, ten_sp, ma_nhasx, khuyenmai,thongtinthem) VALUES ('$ma_sp', '$ten_sp', '$ma_nhasx', '$khuyenmai','$thongtinthem')";
    $result = mysqli_query($this->db, $query);
    return $result;
  }

  public function deleteSanPham()
  {
    $query = "DELETE FROM tbl_sanpham WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($this->db, $query);
    return $result;
  }
  public function editSanPham()
  {
    $query = "SELECT *
              FROM tbl_sanpham
              WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($this->db, $query);
    return $result->fetch_assoc();
  }
  public function editSanPham1($ma_sp, $ten_sp, $ma_nhasx, $khuyenmai, $thongtinthem)
  {
    $query = "update tbl_sanpham set ma_sp = '" . $ma_sp . "', ten_sp = '" . $ten_sp . "' , ma_nhasx = '" . $ma_nhasx . "', khuyenmai = '" . $khuyenmai . "' ,thongtinthem = '" . $thongtinthem . "' WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($this->db, $query);
    return $result;
  }
}
