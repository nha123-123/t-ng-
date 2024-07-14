<?php 
class ModelShoes{

public function __construct(){
	$db = mysqli_connect("localhost","root","","mooshoesk20e");
	mysqli_set_charset($db,"utf8");
	$this->db = $db;

}
public function doLogin(){
			 $query = "SELECT * 
                  FROM users 
                  WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
       		 $result = mysqli_query($this->db, $query);
       			 if (mysqli_num_rows($result) > 0){
           		 $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
		}
		 public function getDataUser(){
        $query = "SELECT * FROM users WHERE level = '1'";
        $listUser = mysqli_query($this->db, $query);
        return $listUser;
    }
   
  
    // đăng kí

public function doRegister($name, $email, $phone, $address, $password, $created){
    $query = "INSERT INTO users (name, email, phone, address, password, level, `create`)
              VALUES ('".$name."','".$email."', '".$phone."', '".$address."', '".$password."', '1', '".$created."')";
    $result = mysqli_query($this->db, $query);
    return $result;
}
public function deleteUser(){
	$query = "DELETE FROM users
	WHERE id_users = '{$_GET['idusers']}'";
	$result = mysqli_query(this -> db,$query);
	return $result;
}
}




 ?> 