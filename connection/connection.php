<?php


$servername = "localhost"; //always localhost
$username = "root"; //root on localhost
$password = "root"; //Password for MAMP is 'root' and XAMP is ''
$dbname = "exitsurvey"; //exit survey when on localhost


/* CONNECTION TO LIVE SERVER
$servername = "localhost"; //always localhost
$username = "w5s4g1n7_denham"; //root on localhost
$password = "denham.33"; //Password for MAMP is 'root' and XAMP is ''
$dbname = "w5s4g1n7_exitsurvey"; //exit survey when on localhost
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
