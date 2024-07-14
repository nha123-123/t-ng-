<?php 
class Model {
    private $db;

    public function __construct() {
        $this->db = mysqli_connect("localhost", "root", "", "kiemtra");
        mysqli_set_charset($this->db, "utf8");
    }

    public function layDanhSachNSX() {
        $query = "SELECT * FROM tbl_nhasx";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function layDanhSachSP() {
        $query = "SELECT * FROM tbl_sanpham";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function addProduct($ma_nhasx, $ten_nhasx, $ma_sp, $ten_sp, $ngaysx, $dongia) {
        $query ="INSERT INTO tbl_nhasx (ma_nhasx, ten_nhasx, ma_sp, ten_sp, ngaysx, dongia)
              VALUES ('".$ma_nhasx."','".$ten_nhasx."', '".$ma_sp."', '".$ten_sp."', '".$ngaysx."','".$dongia."')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
}
?>
