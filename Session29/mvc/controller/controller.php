<?php 
	include 'model/model.php';
	include 'model/product.php';
	include 'model/new.php';
	include 'libs/function.php';
	class Controller {

		public function handleRequest() {
			$model = new Model();
			$product = new Product();
			$new = new news();
			$functionCommon = new FunctionCommon();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// goi model get du lieu
					$home = $model->getHomePage();

					// goi view home
					include 'view/home/home.php';
					break;
				case 'news':
					// goi model xu ly du lieu
					$newList = $new->getNewPage();

					// goi view news
					include 'view/news/news.php';
					break;
				case 'add_new':
					# code...
					// check xem da submit add new chua?
					if (isset($_POST['add_new'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						if ($_FILES['image']['error'] == 0) {
				          $image = uniqid().'_'.$_FILES['image']['name'];
				          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/news/'.$image);
				        }
						$created = date('Y-m-d h:i:s');
						// save vao database
						if ($new->addNew($title, $description, $created, $image) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
						}
					}
					// goi view hien thi trang add new
					include 'view/news/add_new.php';
					break;
				case 'edit_new':
					$id = $_GET['id'];
					$edit = $new->editNew($id);
					$title = $edit['title'];
					$description = $edit['description'];
					$image = $edit['image']; 
					include 'view/news/edit_new.php';

					if (isset($_POST['edit_new'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						if ($_FILES['image']['error'] == 0) {
				          $image = uniqid().'_'.$_FILES['image']['name'];
				          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/news/'.$image);
				        }
						// save vao database
						if ($new->updateNew($id, $title, $description, $image) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
						}
					}
					break;
				case 'delete_new':
				   // lay id cua tin tuc can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa tin tuc
					if ($new->deleteNew($id) === TRUE) {
						$functionCommon->redirectPage('index.php?action=news');
					}
					break;
				case 'products':
					// goi model xu ly du lieu
					$productList = $product->getProductPage();
					// goi view products
					include 'view/products/products.php';
					break;
				case 'product_detail':
					// lay id cua san pham chi tiet
					$id = $_GET['id'];
					// goi model xu ly du lieu
					$productDetail = $product->getProductDetail($id);
					// goi view products
					include 'view/products/product_detail.php';
					break;
				case 'contact':
					// goi view contact
					include 'view/contact/contact.php';
					break;
				case 'delete_product':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($product->deleteProduct($id) === TRUE) {
						//header("Location: "index.php?action=products);
						$functionCommon->redirectPage('index.php?action=products');
					}
					break;
				case 'add_product':
					# code...
					// check xem da submit add product chua?
					if (isset($_POST['add_product'])) {
						$name = $_POST['name'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						$price = $_POST['price'];
						if ($_FILES['image']['error'] == 0) {
				          $image = uniqid().'_'.$_FILES['image']['name'];
				          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
				        }
						$created = date('Y-m-d h:i:s');
						// save vao database
						if ($new->addNew($title, $description, $price, $image, $created) === TRUE) {
							$functionCommon->redirectPage('index.php?action=products');
						}
					}
					// goi view hien thi trang add product
					include 'view/products/add_product.php';
					break;
				default:
					# code...
					break;
			}
		}

	}
?>