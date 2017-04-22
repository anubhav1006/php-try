<?php include('check.php') ?>

<html>
	<body>
	<?php
		session_start();
		include('config.php');
		$username= $_SESSION["username"];
	?>
		<h1>Welcome <?php echo $username;?></h1>
		<h2>Check your <a href="marks.php">Marks</a> or <a href = "attendance.php">Attendance</a> </h2>

		<footer>

			<a href="signout.php"><button type="button" name="button">Logout</button></a>

		</footer>
	</body>
</html>
