<?php 
	/**
	 * 
	 */
	class Supplier
	{
		public function ListSupplier()
		{
			include './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT * FROM supplier ORDER BY name");
			return $result;
			mysqli_close($conn);
		}
		public function SupplierByID($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT name FROM supplier Where id ='".$id."'");
			return $result;
			mysqli_close($conn);
		}
		public function DeleteSupplier($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"DELETE FROM supplier Where id ='".$id."'");
      		header('location:supplier.php');
      		mysqli_close($conn);
 		}
 		public function InsertSupplier($name,$status){
 			include './database/db_connect.php';
 			$result = mysqli_query($conn,"INSERT INTO supplier (name,status) VALUES ('$name','$status')");
 			header('location:supplier.php');
 			mysqli_close($conn);
 		}

 		public function UpdateSupplier($id,$name,$status){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"UPDATE supplier SET name='".$name."', status='".$status."' WHERE id='".$id."' ");
 			header('location:supplier.php');
 			mysqli_close($conn);
 		}
 		public function UpdateStatusSupplier($id,$status){
 			include './database/db_connect.php';
			$result = mysqli_query($conn,"UPDATE supplier SET status='".$status."' WHERE id='".$id."' ");
 			header('location:supplier.php');
 			mysqli_close($conn);
 		}
	}
?>