<?php 
	include './models/supplierModel.php';
	$supplier = new Supplier();
	$result = $supplier -> ListSupplier();

	if(isset($_GET['id'])){
  	$id = $_GET['id'];
	$delete = $supplier -> DeleteSupplier($id);
	}

	if(isset($_POST['newSupplier'])){
		$name = $_POST['name'];
		$status = true;
		$insert = $supplier->InsertSupplier($name,$status);
	}

	if(isset($_POST['updateSupplier'])){
		$id = $_GET['idEditSupplier'];
		$name = $_POST['name'];
		if(isset($_POST['status'])){
			$status=true;
		}
		else{
			$status=false;
		}
		$update = $supplier->UpdateSupplier($id,$name,$status);
	}

	if(isset($_GET['idStatus1'])){
		$id = $_GET['idStatus1'];
		$status = 1;
		$updateStatus = $supplier->UpdateStatusSupplier($id,$status);
	}
	if(isset($_GET['idStatus0'])){
		$id = $_GET['idStatus0'];
		$status = 0;
		$updateStatus = $supplier->UpdateStatusSupplier($id,$status);
	}
	
?>