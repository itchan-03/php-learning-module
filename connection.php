<?php

$servername = "localhost";
$username = "root";
$db = "users_db";

$connect = mysqli_connect($servername, $username, $password, $db);

if($connect->connect_error){
    die("connection failed: ". $connect->connect_error);
}

echo "Connected Successfully";




?>