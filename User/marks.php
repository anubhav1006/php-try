<?php include('check.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marks</title>
  </head>
  <body>
    <center>
      <h1>Marks</h1>
    </center>

    <?php
      include('config.php');

      $sql = "SELECT subject,marks FROM marks_14BCE0176";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "Subject :  " . $row["subject"]. " - Marks " . $row["marks"]."<br>";
        }
      }else {
          echo "0 results";
        }

    ?>

    <footer>

			<a href="signout.php"><button type="button" name="button">Logout</button></a>

		</footer>
    
  </body>
</html>
