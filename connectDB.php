<?php 

// Подключение к базе данных

$ip_server = "127.0.0.1";
$username = "root";
$password = "";
$db_base = "warehouse_kh";

$connection = mysqli_connect($ip_server,$username,$password,$db_base,);


if (mysqli_connect_errno()) {
    die("Data Base connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

?>
