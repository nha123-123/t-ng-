<?php 
	class ViewShoes{
        public function getPageHome(){
           // echo "okii chưa";
        include_once "Templates/Home.php";
    }
    public function getPageLogin(){
      // echo "bạn nhìn thấy giao diện chưa";
      include_once "Templates/FormLogin.php";
    }
    public function getPageUser($listUser){
    include_once"Templates/pageUser.php";
      
    }
    public function getPageRegister(){
      // echo "form đăng ký";
      include_once "Templates/FormRegister.php";
    }
    public function getaddUser(){
      include_once "Templates/FormAddUser.php";
    }
}
 ?>