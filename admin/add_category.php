<?php
	
	include("config.php");
	
	if(isset($_POST['btn_submit']))
	{
		$name = $_POST['category_name'];
		$house = $_POST['house_item'];
		$personal = $_POST['personal_item'];
		$pack = $_POST['pack_item'];
		$beve = $_POST['beve_item'];
		
		$query="INSERT into tbl_category (category_name,house_item,personal_item,pack_item,beve_item) 
							VALUES ('$name','$house','$personal','$pack','$beve')";
		if ($conn->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
		
	}

	

	$conn->close();
	
	
	header('location:boil.php');
?><?php
	
?>