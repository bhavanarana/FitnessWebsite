<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'recordfitness';
$conn = new mysqli($servername, $username, $password, $db, '3307');
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
    $query = "INSERT INTO record(Email, Name, Goal, Workout_lvl, Diet, DOB, Height, Weight, Blood_Group)
    VALUES('$email', '$name', '$goal', '$workout_lvl', '$diet', '$dob', '$height', '$weight', '$blood_grp')";
    $insert_query = mysqli_query($conn, $query);
    if ($insert_query) {
        echo 'Suceessfully submitted';
    } else {
        echo 'Failed to Submitted';
    }
}
?>
