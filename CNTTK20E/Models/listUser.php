<?php
require_once "ModelShoes.php";
class ListUser extends ModelShoes{
	public $tableName = 'users';
	public $columns = ['id_user','name','phone','password','adress','create'];
	
} 
 ?>