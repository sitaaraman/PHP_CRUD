<?php

    include 'dbConnection.php';

    $result = $conn->query("SELECT * FROM registrationdb");
    $userData = $result->fetch_all(MYSQLI_ASSOC);

    // foreach($userData as $d){
    //     if($uemail == $d['email'] && $upass == $d['password'])
    //     {
    //         echo "You Login succesfully!!!";
    //     } else{
    //         echo "Error : You";
    //     }

    // }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $uemail = $_POST['email'];
        $upass = $_POST['password'];

        foreach($userData as $d){
        if($uemail == $d['email'] && $upass == $d['password'])
        {
            echo "You Login succesfully!!!";
            header("Location: dbviewfile.php");
        } else{
            echo "Error : You fail to login!!!";
        }

    }
    }


?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        form {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
        }

        legend{
            color: #007bff;
            font-size: 2em;
            font-weight: bold;
        }
       
        label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
        width: calc(100% - 22px); /* Account for padding and border */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        button[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        }

        button[type="submit"]:hover {
        background-color: #0056b3;
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Login Page</legend>
            <label for="uname">Email: </label>
            <input type="email" name="email"><br><br>
            <label for="uname">Password: </label>
            <input type="password" name="password"><br><br>
            <button type="submit">Login</button>
        </fieldset>
    </form>
</body>
</html>