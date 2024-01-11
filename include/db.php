<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "hotelbookinghub";
$con = new mysqli($server, $user, $pass, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "<script>console.log('Connected to the database successfully')</script>";
}
?>
