<?php
    include 'dbConnection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST['user_name'];
        $uemail = $_POST['email'];

        $uproPic = '';

        if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === 0) {
 
            $filepath = "usersprofilePic/";
            $uproPic = time() . "_" . basename($_FILES["profilePicture"]["name"]);
            $targetFile = $filepath . $uproPic;
 
            if (!file_exists($filepath)) {
                mkdir($filepath, 0777, true);
            }
 
            move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile);

        }

        $upass = $_POST['password'];
        $ucpass = $_POST['confirm_password'];

        if(!empty($uname) && !empty($uemail) && !empty($uproPic) && !empty($upass) && !empty($ucpass)){

            if($upass === $ucpass){
                $sql = "INSERT INTO registrationdb (user_name, email, profilePicture, password) VALUES ('$uname', '$uemail', '$uproPic', '$upass')";
                $conn->query($sql);
                header("Location: login.php");
                // echo "Password Match!";
            } else{
                // echo "Your password not match with comfirm password!!!";
                header("Location: regibtn.php");
            }
            
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
        input[type="password"],
        input[type="file"] {
        width: calc(100% - 22px); /* Account for padding and border */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type="file"] {
            padding: 5px;
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

    <div>
        <form action="#" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Registration Form</legend>
                <label for="uname">User Name: </label>
                <input type="text" name="user_name" required><br><br>
                <label for="uname">Email: </label>
                <input type="email" name="email" required><br><br>
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" id="profile_picture" name="profilePicture" accept="usersprofilePic/*" required>
                <label for="uname">Password: </label>
                <input type="password" name="password" required><br><br>
                <label for="uname">Confirm Password: </label>
                <input type="password" name="confirm_password" required><br><br>
                <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>