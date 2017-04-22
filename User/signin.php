
<html>
<head>
<style>

input{
	text-align:center;
}
</style>


<script>

function alerting(){
	alert("User Dosen't exist.");
	return false;
}

</script>

</head>


<body style="background-color:yellow;">

<center style="background-color:white; width:60%;">

<h2>Log in to your account.</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input type="text" name="username" required>
<br><br>
Password: <input type="password" name="password" required>
<br><br>
<input type="submit" name="submit">
</form>
<a href="forgotpass.php"><button type="button" name="button">Forgot your password</button></a>
<a href="signup.php"><button type="button" name="button">Signup to our site.</button></a>
</center>

<?php

include('config.php');

?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="SELECT * FROM login where username=$username and password = $password";
	$result=mysqli_query($con, $sql);


	if(mysqli_num_rows($result) < 0){

		echo'<script>alerting()</script>';
		return false;
	}
	else{


// Start the session
	session_start();
	$_SESSION["username"] = $username;


		header('location:index.php');
	}
}
?>
</body>
</html>
