<?php 
	include("config.php");
?>

<?php 

if(isset($_POST['btn_submit_log']))
{
	$user_name = $_POST['user_name'];
	$pass = $_POST['pass'];
	
	echo $user_name."<br/>";
	echo $pass."<br/>";

	$sql = "SELECT * FROM tbl_user where user_name = '$user_name',pass = '$pass'";
	//$result = $conn->query($sql);

	if ($result = $conn->query($sql))
	{
		echo "sucess";
	}
	else
	{
		echo "error";
	}
}
$conn->close();
?>