<?php 
	if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }
    $no_of_records_per_page = 10;
    $offset = ($pageno-1) * $no_of_records_per_page;

	include './models/productModel.php';
	$product = new Product();
	$result = $product -> ListProduct($offset,$no_of_records_per_page);

	if(isset($_GET['id'])){
  		$id = $_GET['id'];
		$delete = $product -> DeleteProduct($id);
	}

	if(isset($_POST['newProduct'])){
		$name = $_POST['name'];
		$idSupplier=$_POST['idSupplier'];
		$price = $_POST['price'];
		$quantity= $_POST['quantity'];
		$description = $_POST['description'];
		$insert = $product->InsertProduct($name,$idSupplier,$price,$quantity,$description);
	}

	if(isset($_POST['update'])){
		$id = $_GET['idEditProduct'];
		$name = $_POST['name'];
		$idSupplier=$_POST['idSupplier'];
		$price = $_POST['price'];
		$quantity= $_POST['quantity'];
		$description = $_POST['description'];
		$update = $product->UpdateProduct($id,$name,$idSupplier,$price,$quantity,$description);
	}
?>