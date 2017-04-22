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

function updated(){
	alert("Password successfully updated.");
	return false;
}

function error(){
  alert("There was an error. Try again.");
}

</script>

</head>


<body style="background-color:yellow;">

<center style="background-color:white; width:60%;">

<h2>Enter your credentials.</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input type="text" name="username" required>
<br><br>
Phone: <input type="text" name="phone" required>
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
	$phone=$_POST['phone'];

  $sql="SELECT * FROM login where username='$username' and contact = '$phone'";

	$result=mysqli_query($con, $sql);


	if(mysqli_num_rows($result) < 0){

		echo'<script>alerting()</script>';
		return false;
	}
	else{
	  $newpass=substr(md5(rand()),0,7);
		echo $newpass;

    $sql_update= "UPDATE login SET password = '$newpass'  where username='$username' and contact = '$phone'";

    $result=mysqli_query($con, $sql_update);

    if($result){

        echo'<script>updated()</script>';
        echo "Your new password is $newpass";
        echo '<a href ="login.php"><br>Login now</a>';
        echo '<a href ="update.php"><br>Update password</a>';
    }
    else{
      echo '<script>error()</script>';
			echo mysqli_error($con);
    }
	}
}
?>
</body>
</html>
