<?php 
	require 'config/database.php';

	class Model extends DatabaseConnect {

		function add_user($username, $password, $avatar, $name, $level) {
			$sql = "INSERT INTO users(username, password, avatar, name, level) VALUES ('$username', '$password', '$avatar', '$name', '$level')";
			return mysqli_query($this->connect(), $sql);
		}

		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}

		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser->fetch_assoc();
		}

		function register($username, $password, $avatar, $name, $level) {
			$sql = "INSERT INTO users(username, password, avatar, name, level) VALUES ('$username', '$password', '$avatar', '$name', '$level')";
			return mysqli_query($this->connect(), $sql);
		}

		function get_edit_user($id){
			$sql = "SELECT * FROM users WHERE id = $id";
			$user = mysqli_query($this->connect(), $sql);
			return $user->fetch_assoc();
		}
		function post_edit_user($id, $avatar, $name, $level){
			$sql = "UPDATE users SET avatar = '$avatar', name = '$name', level = '$level' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function delete_user($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

	}
?>