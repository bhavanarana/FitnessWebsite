<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!--Link CSS-->
  <link rel="stylesheet" href="../css/style.css" />
  <!-- For Responsive (meta tags required)-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet" />
  <title>Sweat Arena</title>
  <style>
    .form-container{
      text-align:center;
    }
    .form-head{
  color: whilte;
    font-size: 64px;
    font-weight: 600;
    }
   .form-data{
     text-align: left;
   }
   .form-input{
     
   }
    
  </style>
</head>

<body>
<?php include 'navbar.php'; ?>
  <div class="conatiner form-container">
    <h2 class="form-headers form-head mt-5">Get Personalize Plan</h2>
    <form action="submit.php" method="POST">
      <label for= "name" class="form-headers form-data">Name</label>
      <input class = "form-input" type="text" name= name">
      <br>
      <lab class="form-headers">Email</lab form-datael>
      <input class = "form-input" type="text" name= "email">
      <br>
      <label for = "dob" class="form-headers form-data">DOB</label>
      <input class = "form-input" type="date" name= "dob">
      <br>
      <label for = "weight" class="form-headers form-dataers">Weight</label for = "">
      <input class = "form-input" type="nu form-datamber" name="weight">
      <br>
      <label for = "height" class="form-headers form-dataers">Height</label for = "">
      <input class = "form-input" type="te form-dataxt" name="height">
      <br>
      <label for = "blood" class="form-headers form-datars">Blood group</label for = "">
      <input class = "form-input" type="te form-dataxt" name="blood">
      <br>
      <label for = "goal" class="form-headers form-datas">Goal</label for = "">
      <input class = "form-input" type="te form-dataxt" name="goal">
      <br>
      <br>
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
