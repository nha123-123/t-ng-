<?php 
	require_once "Models/ModelShoes.php";
	require_once "Views/ViewShoes.php";
	class ControllerShoes{
		var $model, $view;
		public function __construct(){
			$this -> model = new ModelShoes();
			$this -> view = new ViewShoes();
		}

		public function getPageHome(){
			$this -> view -> getPageHome();
		}
		public function getPageLogin(){
			$this -> view -> getPageLogin();
		}

		public function getPageRegister(){
			$this -> view -> getPageRegister();
		}
		public function deleteUser(){
			$this -> model -> deleteUser();
			header("location:index.php?task=getPageUser");
		}
		public function doLogin(){
			$result = $this->model->doLogin();
			$_SESSION['id_user']=$result['id_user'];
			$_SESSION['username']=$result['username'];
			$_SESSION['phone']=$result['phone'];
			$_SESSION['email']=$result['email'];
			$_SESSION['adress']=$result['adress'];
			$_SESSION['level']=$result['level'];
			if($result['level']==2){
				header("location:index.php?task=pageuser");

			}
			elseif($result['level']==1){
				header("location:index.php?task=pagehome");
			}

			}
			public function getPageUser(){
				$listUser = $this -> model->getDataUser();
				$this -> view -> getPageUser($listUser);
			}
			public function getaddUser(){
				$this -> view -> getaddUser();
			}
			public function doRegister($name,$email,$phone,$adress,$password,$created){
				$result = $this -> model->doRegister($name,$email,$phone,$adress,$password,$created);
				$message="dki ddc";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$this -> view ->getPageRegister(); 
			}
			
		}
	
 ?>