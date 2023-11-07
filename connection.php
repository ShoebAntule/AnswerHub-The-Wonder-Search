<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "google_new";

//To create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    //echo "success";
} else {
    //die("Connection Failed".mysqli_connect_error());
}
?>
