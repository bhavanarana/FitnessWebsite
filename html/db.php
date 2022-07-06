<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'fitness';
$conn = new mysqli($servername, $username, $password, $db);
if (!$conn) {
  die('failed' . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $goal = $_POST['goal'];
  $workout_lvl = $_POST['workout_lvl'];
  $diet = $_POST['diet'];
  $dob = $_POST['date'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $blood_grp = $_POST['blood-grp'];
  $query = "INSERT INTO record(email, name, goal, workout_lvl, diet, dob, height, weight, blood_group)
    VALUES('$email', '$name', '$goal', '$workout_lvl', '$diet', '$dob', '$height', '$weight', '$blood_grp')";
  $insert_query = mysqli_query($conn, $query);
  if ($insert_query) {
    //send mail
    $to = 'gamingriot56@gmail.com';
    $subject = 'client requested for Routine Plan';
    $message = "Email: $email, Name: $name, Goal: $goal, Workout Level: $workout_lvl, Diet: $diet, DOB: $dob, Height: $height, Weight: $weight, Blood Group: $blood_grp ";
    $header = '4bhavanarana@gmail.com';
    if (mail($to, $subject, $message, $header)) {
      header("Location:submit.php?info=added");
    } else {
      echo "Oops Try Again";
    }
  } else {
    echo "Fail to submit";
  }
}
