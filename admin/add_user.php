<?php
	
	include("config.php");
	
	if(isset($_POST['btn_submit']))
	{
		$name = $_POST['user_name'];
		$pass = $_POST['password'];
		
		$query="INSERT into tbl_user (user_name,pass) 
							VALUES ('$name','$pass')";
		if ($conn->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
		
	}

	

	$conn->close();
	
	
	header('location:user.php');
?>