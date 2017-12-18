<?php
	
	include("config.php");
	include("image_ext.php");
	
	if(isset($_POST['btn_submit']))
	{
		$name = $_POST['product_name'];
		$cat = $_POST['category'];
		$price = $_POST['price'];
		$desc = $_POST['product_desc'];
	
		if (!empty($_FILES["product_image"]["name"])) {

		$file_name=$_FILES["product_image"]["name"];
		$temp_name=$_FILES["product_image"]["tmp_name"];
		$imgtype=$_FILES["product_image"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "upload/".$imagename;
	

	if(move_uploaded_file($temp_name, $target_path)) {
		echo $query="INSERT into tbl_product (product_name,category,price,description,product_image) 
							VALUES ('$name','$cat','$price','$desc','$target_path')";
		if ($conn->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
		
	}else{

	   exit("Error While uploading image on the server");
	} 

	}

	$conn->close();
	}
	
	header('location:boil.php');
?>