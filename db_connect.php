
<?php
$servername = "localhost";
$username = "tarun";
$password = "123456";
$dbname = "publish";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
