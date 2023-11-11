<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbName = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    echo "failed connection";
    exit();
}
?>