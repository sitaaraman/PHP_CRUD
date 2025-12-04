<?php
    include 'dbConnection.php';

    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM registrationdb WHERE id=$id");
    $userData = $result->fetch_assoc();
    $uoPic = $userData['profilePicture'];

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

        } else{
            $uproPic = $uoPic;
        }

        $upass = $_POST['password'];
        $ucpass = $_POST['confirm_password'];

            if($upass === $ucpass){
                $sql = "UPDATE registrationdb SET user_name='$uname', email='$uemail', profilePicture='$uproPic', password= '$upass' WHERE id=$id";
                $conn->query($sql);
                header("Location: dbviewfile.php");
                // echo "Password Match!";
            } else{
                echo "Your password not match with comfirm password!!!";
                // header("Location: updatebtn.php");
            }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation Page</title>
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
            width: calc(100% - 22px);  /* Account for padding and border  */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
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
                <legend>Updation Form</legend>
                <label for="uname">User Name: </label>
                <input type="text" name="user_name" value="<?= $userData['user_name'];?>" required><br><br>
                <label for="uname">Email: </label>
                <input type="email" name="email" value="<?= $userData['email'];?>" required><br><br>
                <img src="usersprofilePic/<?= $userData['profilePicture'];?>" alt="img" width= "80px">
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" id="profile_picture" name="profilePicture" accept="usersprofilePic/*">
                <label for="uname">Password: </label>
                <input type="password" name="password" value="<?= $userData['password'];?>" required><br><br>
                <label for="uname">Confirm Password: </label>
                <input type="password" name="confirm_password" value="<?= $userData['password'];?>" required><br><br>
                <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>