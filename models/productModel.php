<?php 
	/**
	 * 
	 */
	class Product
	{

		public function ListProduct($offset,$no_of_records_per_page)
		{
			// code...
			include './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT * FROM product LIMIT $offset, $no_of_records_per_page");
			return $result;
			mysqli_close($conn);
		}
		public function ProductById($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT * FROM product Where id ='".$id."'");
			return $result;
			mysqli_close($conn);
		}
		public function DeleteProduct($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"DELETE FROM product Where id ='".$id."'");
      		header('location:product.php');
      		mysqli_close($conn);
 		}
 		public function InsertProduct($name,$idSupplier,$price,$quantity,$description){
 			include './database/db_connect.php';
 			$result = mysqli_query($conn,"INSERT INTO product (name,idSupplier,price,quantity,description) VALUES ('$name','$idSupplier','$price','$quantity','$description')");
 			header('location:product.php');
 			mysqli_close($conn);
 		}
 		public function UpdateProduct($id,$name,$idSupplier,$price,$quantity,$description){
 			include './database/db_connect.php';
 			$result = mysqli_query($conn,"UPDATE product SET name='".$name."',idSupplier='".$idSupplier."',price='".$price."',quantity='".$quantity."',description='".$description."' WHERE id = $id;");
 			header('location:product.php');
 			mysqli_close($conn);
 		}
	}
?>