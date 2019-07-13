<?php 
	require_once 'config/connectdb.php';
	class Product extends ConnectDB {

		public function getProductPage() {
			$sql = "SELECT * FROM products";
			$productList = mysqli_query($this->connect(), $sql);
			return $productList;
		}

		public function getProductDetail($id) {
			$productDetail = 'Chi tiet san pham '.$id;
			return $productDetail;
		}

		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		public function addProduct($name, $description, $price, $image, $created) {
			$sql = "INSERT INTO products(name, description, price, image, created) VALUES ('$name', '$description', $price, '$image', '$created')";
			return mysqli_query($this->connect(), $sql);
		}

	}
?>