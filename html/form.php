<!DOCTYPE html>
<html lang="en">
<head>
 <?php 
 include "bootstrap.php"
 ?>
</head>
<body>
<?php include 'navbar.php'; ?>
  <div class="container form-container">
    <h1 class = "form-head">Get your Personalized Chart</h1>
      <input class = "form-input" type="submit" name="submit" value="submit">
  </div>
<!-- Port 3306 uses password so always use port 3307 only on ur system -->
  <?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'sweat';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db, '3307');

  // Check connection
  if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
  }
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $a1 = $_POST['email'];
      $a2 = $_POST['dob'];
      $a3 = $_POST['weight'];
      $a4 = $_POST['height'];
      $a5 = $_POST['blood'];
      $a6 = $_POST['goal'];
      //NOW INSERT INTO TABLE
      $query = "INSERT INTO `entries`(`name`, `email`, `dob`, `weight`, `height`, `blood_grp`, `goal`) VALUES ('$name','$a1','$a2','$a3','$a4','$a5','$a6')";
      if ($conn->query($query) === true) {
          echo 'SUCCESSFULLY INSERTED';
      } else {
          echo 'Failed to add data<br>' . $query . '<br>' . $conn->error;
      }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
</body>

</html>
