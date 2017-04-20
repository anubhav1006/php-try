<html>
	<body>
	<?php
		session_start();
		include('config.php');
		$username= $_SESSION["username"];
	?>
		<h2>Welcome <?php echo $username;?></h2>
		<p>And hence login and signup is completed. </p>
	</body>
</html>