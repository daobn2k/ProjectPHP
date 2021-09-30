<?php 
/**
 * 
 */
class ImportOrder
{
	
	public function ListOrder()
	{
		// code...
		include './database/db_connect.php';
		$result = mysqli_query($conn,"SELECT * FROM importorder");
		return $result;
		mysqli_close($conn);
	}
	public function CreateNew($user){
		include './database/db_connect.php';
		$result = mysqli_query($conn,"INSERT INTO importorder (user) VALUES ('".$user."')");
		if ($result === TRUE) {
  		$last_id = $result->insert_id;
  		$detailOrder = mysqli_query($conn,"INSERT INTO detailorder (idOrder) VALUES ('".$last_id."') ");
		} 
		else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	public function DeleteOrder($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"DELETE FROM importorder Where id ='".$id."'");
      		header('location:importOrder.php');
      		mysqli_close($conn);
 		}
}
?>