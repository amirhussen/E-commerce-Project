<?php
session_start();
include_once("config.php");

if(isset($_POST['submit'])){
	$admin=$_POST['admin'];
	$Password=$_POST['Password'];
	
	
	
	
		$query="select * from admin where admin='$admin' AND Password='$Password'";
		$run=mysqli_query($conn,$query);
		$chk=mysqli_num_rows($run);
		if($chk==0){
		echo "<script>alert('email or pass not match')</script>";
		}
		else{
			
			$_SESSION['massege']="loggedin";
			$_SESSION['admin']=$admin;
			$_SESSION['Password']=$Password;
			echo "<script>alert('logged successful')</script>";
			echo "<script>window.open('admin/boil.php','_self')</script>";
		}
		
	}
	
	


?>


<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$admin = $user->getadmindata($_POST);
	}
?>
<?php
	//if(isset($admin)){
		//echo $admin;
	//}
?>
<h2>Login Form</h2>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="admin" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
	
        
    <button type="submit" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
