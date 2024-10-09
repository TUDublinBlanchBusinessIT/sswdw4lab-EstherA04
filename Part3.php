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

// SQL query to select members
$sql = "SELECT firstname, surname FROM member";
$result = mysqli_query($conn, $sql);

// Check if there are results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['firstname'] . " " . $row['surname'] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>
