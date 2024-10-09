<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tennisclub";
$port = 3306;

date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO member (firstname, surname) VALUES ('john', 'doe')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
