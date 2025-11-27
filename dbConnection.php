<?php 

$host = "localhost";
$user_name = "root";
$password = "";
$db_name = "php_crud";

$conn = new mysqli($host, $user_name, $password, $db_name);

if($conn->connect_error){
    die("Connection is faield" . $conn->connect_error);
}

?>