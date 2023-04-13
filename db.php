<?php
$server = "localhost";
$username = "root";
$pass = "loknath";
$db = "practice";

$conn = new mysqli($server,$username,$pass,$db);

if($conn->connect_error){
    die("Connection failed");
}


?>