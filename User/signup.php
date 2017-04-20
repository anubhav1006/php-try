
<html>
<head>
<style>

input{
	text-align:center;
}
</style>


<script>

function alerting(){
	alert("Passwords do not match");

	return false;
}
function complete(){
	alert("Submitted successfully. Now you can Login.");
}

</script>

</head>


<body style="background-color:yellow;">

<center style="background-color:white; width:60%;">

<h2>Sign UP. Create your account</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input type="text" name="username" required>
<br><br>
Password: <input type="password" name="password" required>
<br><br>
Confirm Password: <input type="password" name="cpassword" required>
<br><br>
Email: <input type="text" name="email" required>
<br><br>
Contact: <input type="text" name="contact" required>
<br><br>
Registration Number: <input type="text" name="reg" required> 
<br><br>
<input type="submit" name="submit">
</form>

</center>

<?php

include('config.php');

?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$reg=$_POST['reg'];


	if($password!=$cpassword){

		echo'<script>alerting()</script>';
		return false;
	}
	
	$sql="INSERT INTO login(username,password,email,contact,reg) VALUES ('$username','$password','$email','$contact','$reg')";
	$result=mysqli_query($con, $sql);
	if($result){
		echo'<script>complete()</script>';
		header('location:signin.php');
	}
	else{
		echo "Error: ".mysqli_error($con);	
	}
}

?>

</body>
</html>
