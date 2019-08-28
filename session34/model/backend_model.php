<?php 
	include 'config/database.php';

	class BackendModel extends DatabaseConnect {
		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function deleteUser($id) {
			$sql = "DELETE FROM users WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function getEditUser($id) {
			$sql = "SELECT * FROM users where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function editUser1($username,$name, $email, $phone, $birthday, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE users SET username ='$username', name= '$name', email ='$email', phone='$phone', birthday	='$birthday', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser($username,$name, $email, $phone, $birthday, $image, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE users SET username ='$username',name= '$name', email ='$email', phone='$phone', birthday	='$birthday', avatar ='$image',  updated='$updated'where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function listCategory() {
			$sql = "SELECT * FROM product_categories";
			$listCategory = mysqli_query($this->connect(), $sql);
			return $listCategory;
		}
		function AddProduct( $name, $description, $category, $image, $price) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO products(product_category_id, name, description, image, price, created) VALUES ('$category', '$name', '$description', '$image', '$price', '$created')";
		return mysqli_query($this->connect(), $sql);
		var_dump($sql);
		}
		public function listProduct() {
			$sql = "SELECT * FROM products";
			$listProduct = mysqli_query($this->connect(), $sql);
			return $listProduct;
		}
		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function getEditProduct($id) {
			$sql = "SELECT * FROM products where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function getCategory_id($id) {
			$sql = "SELECT * FROM product_categories where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function editProduct1($name, $description,$category, $price, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE products SET name ='$name', description= '$description', product_categories_id ='$category', price='$price', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editProduct($name, $description,$category, $price,$image, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE products SET name ='$name', description= '$description', product_categories_id ='$category', price='$price',image='$image', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>