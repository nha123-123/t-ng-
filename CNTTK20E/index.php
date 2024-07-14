<?php 
require_once "Controller/ControllerShoes.php";

session_start();

// controller
$ControllShoe = new ControllerShoes();

$task =isset($_GET['task'])? $_GET['task']:null;

//login
$name = isset($_POST['name'])? $_POST['name']:null;
$email = isset($_POST['email'])? $_POST['email']:null;
$phone = isset($_POST['phone'])? $_POST['phone']:null;
$address = isset($_POST['address'])? $_POST['address']:null;
$password = isset($_POST['password'])? $_POST['password']:null;
$repassword = isset($_POST['repassword'])? $_POST['repassword']:null;
$created = date("Y.m.d");

//đăng nhập
if (isset($_POST['login'])) {
	$ControllShoe->doLogin();
}
// dang ky
if (isset($_POST['register'])){
    if (empty($name) || empty($email) || empty($phone || empty($address)  || empty($password) || empty($repassword))){
        $message = "Không được để trống !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif ($password != $repassword){
        $message = "Mật khẩu không trùng nhau !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif (isset($name) && isset($email) && isset($phone) && isset($address)  && isset($password) && isset($repassword) && $repassword = $password){
        $ControllShoe->doRegister($name, $email, $phone, $address, $password, $created);
    }
}

switch ($task){
	case 'pagehome':
        $ControllShoe ->getPageHome();
        break;
    case 'pagelogin':
        $ControllShoe ->getPageLogin();
        break;
    case 'pageuser':
        $ControllShoe ->getPageUser();
        break;
    case 'pageregister':
        $ControllShoe ->getPageRegister();
        break;
     case 'deleteusers':
      $ControllShoe ->getdeleteUser();
     break;
     case 'addUser':
      $ControllShoe ->getaddUser();
     break;

    default:
        $ControllShoe->getPageHome();
        break;
   
}
 ?>
