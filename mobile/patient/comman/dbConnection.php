<?php
$servername = "localhost";
$username = "root";
$password = "";
$limit=20;
$con = new mysqli($servername, $username, $password,"shrchospital_sarvodaya_db");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// echo 'connected';
// $servername = "119.18.55.181";
// $username = "shrchospital_cjroot";
// $password = "CopperjamSarvodaya";
// $limit=20;
// $con = new mysqli($servername, $username, $password,"shrchospital_sarvodaya_db");
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }



 ?>
