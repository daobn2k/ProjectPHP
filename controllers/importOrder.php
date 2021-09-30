<?php 
	include './models/importOrderModel.php';
	$importOrder = new ImportOrder();
	$result = $importOrder -> ListOrder();

	if(isset($_GET['newImportOrder'])){
		$user = $_SESSION['username'];
		$result = $importOrder -> CreateNew($user);
	}

	if(isset($_GET['id'])){
  		$id = $_GET['id'];
		$delete = $importOrder -> DeleteOrder($id);
	}
?>