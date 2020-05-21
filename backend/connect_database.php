<?php
$servername = "gator3248.hostgator.com:3306";
$username = "jasperru_root";
$password = "1209Angela!";
$dbname = "jasperru_qrordernz";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'hello';
?>
