<?php

include 'dbConnection.php';

$id = $_GET['id'];
$result = $conn->query("SELECT *FROM form_database WHERE id=$id");
$rowData = $result->fetch_assoc();

// print_r($rowData);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $mobileNo = $_POST['mo_number'];
        $pdw = $_POST['password'];
        $address = $_POST['address'];

        $sql = "UPDATE form_database SET firstname='$fname', lastname='$lname', email='$email', age='$age', mo_number='$mobileNo', password='$pdw', address='$address' WHERE id=$id";
        $conn->query($sql);
        header("Location: view.php");
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up Page</title>
    <!-- <link rel="stylesheet" href="singuppage.css"> -->
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .formDiv{
            border: 2px solid #301934;
            width: 50%;
            margin: 0px auto;
            background-color: #E6E6FA;
        }
        h1{
            color: #6a5acd;
            text-align: center;
        }
        form{
            color: #6a5acd;
            text-align: center;
            font-size: 20px;
        }
        #button{
            background-color: #6a5acd;
            color: #ffe4c4;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="formDiv">
        <h1>Update Form</h1>
        <br><br>
        <!-- action="C:\Users\HP(SSS)\Desktop\PortfolioHTML\SingInForm.html" -->
        <form method = "POST">

            <label for="fname">First Name </label><br><br>
            <input type="text" id="fname" name="firstname" placeholder="Enter Your First Name" minlength="3" maxlength="27" value ="<?= $rowData['firstname'];?>" required><br><br>

            <label for="lname">Last Name </label><br><br>
            <input type="text" id="lname" name="lastname" placeholder="Enter Your Last Name" minlength="3" maxlength="27" value ="<?= $rowData['lastname'];?>" required><br><br>

            <label for="email_ID">Email ID </label><br><br>
            <input type="email" id="email_id" name="email" placeholder="Enter Your Email ID" value ="<?= $rowData['email'];?>" required><br><br>

            <label for="age">Age </label><br><br>
            <input type="number" id="age" name="age" placeholder="Enter Your Age" min="0" max="125" value ="<?= $rowData['age'];?>" required><br><br>

            <label for="MobNumber">Contact </label><br><br>
            <input type="tel" id="MobNumber" name="mo_number" placeholder="Enter Your number" value ="<?= $rowData['mo_number'];?>" required><br><br>

            <label for="userPwd">Password </label><br><br>
            <input type="password" id="userPwd" name="password" placeholder="Enter Your Password" minlength="8" maxlength="16" value ="<?= $rowData['password'];?>" required><br><br>

            <label for="address">Address </label><br><br>
            <textarea name="address" id="address" name="address" rows="4" cols="21" placeholder="Enter Your Address" value ="<?= $rowData['address'];?>"></textarea><br><br>

            <input type="submit" id="button"><br><br><br>

        </form>

    </div>

</body>
</html>