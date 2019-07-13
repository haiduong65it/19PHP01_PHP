<?php 
	require_once 'config/connectdb.php';
	class news extends ConnectDB {

		public function getNewPage() {
			$sql = "SELECT * FROM news";
			$newList = mysqli_query($this->connect(), $sql);
			return $newList;
		}

		public function deleteNew($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		public function addNew($title, $description, $create_at, $image) {
			$sql = "INSERT INTO news(title, description, create_at, image) VALUES ('$title', '$description', '$create_at', '$image')";
			return mysqli_query($this->connect(), $sql);
		}

		public function editNew($id){
			$sql = "SELECT * FROM news where id = $id";
			$new = mysqli_query($this->connect(), $sql);
			return $new->fetch_assoc();
		}

		public function updateNew($id,$title, $description, $image) {
			$sql = "UPDATE news SET title = '$title', description = '$description', image = '$image' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>