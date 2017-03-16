<?php

$servername = "localhost";
$username = "root";
$password = ""; //Password for MAMP is 'root' and XAMP is ''
$dbname = "exitsurvey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<i class="small material-icons">check</i>' . "Connected successfully";

?>
