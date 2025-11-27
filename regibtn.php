<?php

    include 'dbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirected Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .centerdiv{
            width: 80%;
            margin: 10px auto;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="centerdiv">
        <h3>Something Went Wrong!!!</h3>
        <br><br>
        <a href="registration.php" class="btn btn-primary btn-lg active" role="button">Go to Registration Page</a>
    </div>
</body>
</html>