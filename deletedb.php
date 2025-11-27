<?php

include 'dbConnection.php';

$id = $_GET['id'];

$conn->query("DELETE FROM form_database WHERE id=$id");
header("Location: view.php");

?>