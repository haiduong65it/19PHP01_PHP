<?php 
	include 'config/database.php';

	class FrontendModel extends DatabaseConnect {
		function register( $username, $password, $name, $email, $phone, $birthday, $avatar) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO users(role, username, password, name, email, phone, birthday, avatar, created) VALUES ('admin', '$username', '$password', '$name', '$email', '$phone', '$birthday', '$avatar', '$created')";
		return mysqli_query($this->connect(), $sql);
		}
		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function listProduct() {
			$sql = "SELECT * FROM product";
			$listProduct = mysqli_query($this->connect(), $sql);
			return $listProduct;
		}
		function checkExistUser($username, $email) {
		$sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
		return mysqli_query($this->connect(), $sql);
	}
	function login($username, $password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		return mysqli_query($this->connect(), $sql);

	}
	function get_Name($username){
		$sql = "SELECT name FROM users WHERE username = '$username'";
		$name = mysqli_query($this->connect(), $sql)->fetch_assoc();
		return $name;
	}
	}
?>