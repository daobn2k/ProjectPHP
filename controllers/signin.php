<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$username = $_POST["username"];
  	$password = $_POST["password"];
  	include_once './models/loginModel.php';
  	$login = new Login();
  	$count = $login->LoginValidation($username,$password);
	if($count>0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('Location: home.php');
	}
	else{
		echo '<center class="alert alert_danger">Sai tài khoản và mật khẩu</center>';
	}
	//controller đăng nhập
}