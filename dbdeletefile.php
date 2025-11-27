<?php

include 'dbConnection.php';

$id = $_GET['id'];

$conn->query("DELETE FROM registrationdb WHERE id=$id");
header("Location: dbviewfile.php");

?>