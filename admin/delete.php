<?php 
    include("config.php");
	if($_GET['id']){
		
	}
	else{
		header("Location:all_product.php");
	}
?>

<?php
	
		$id = $_GET['id'];
	

		$sql = "DELETE FROM tbl_product WHERE sn='$id'";

		if ($conn->query($sql) === TRUE) {
			echo "Record delete successfully";
		} else {
			echo "Error delete record: " . $conn->error;
		}


	$conn->close();
	
	
	header('location:all_product.php');
?>