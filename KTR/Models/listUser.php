<?php
require_once "Model.php";
class ListUser extends Model{
	public $tableName = 'tbl_nhasx';
	public $columns = ['ma_nhasx','ten_nhasx','ma_sp','ten_sp','ngaysx','dongia'];
	
} 
 ?>