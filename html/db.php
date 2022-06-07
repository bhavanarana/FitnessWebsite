<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'recordfitness';
$conn = new mysqli($servername, $username, $password, $db, '3307');
if (!$conn) {
    die('failed' . mysqli_connect_error());
}
?>
