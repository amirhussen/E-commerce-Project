<?php
	
	include("config.php");
	
	if(isset($_POST['btn_submit']))
	{
		$name = $_POST['product_name'];
		$id = $_POST['product_id'];
		$cat = $_POST['category'];
		$price = $_POST['price'];
		$desc = $_POST['product_desc'];
	
		
	

		$sql = "UPDATE tbl_product SET product_name='$name',category='$cat',price='$price',description='$desc' WHERE sn='$id'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}

	$conn->close();
	
	
	header('location:all_product.php');
?>