<?php

    include 'dbConnection.php';

    $result = $conn->query("SELECT * FROM registrationdb");
    $userData = $result->fetch_all(MYSQLI_ASSOC);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .viewTable {
            display: flex;
            width: 80%;
            justify-content: center;
            margin: auto;
            border: 2px solid #007bff;
            border-radius: 3px;
            margin-top: 50px;
            box-shadow: 0px 2px 5px #a9a9a9;
        }
    </style>
</head>
<body>

    <center><h3>Registration Database</h3></center>

    <div class="viewTable">
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Picture</th>
                    <th>User Password</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach($userData as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['user_name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <?php if (!empty($user['profilePicture'])): ?>
                                    <img src="usersprofilePic/<?= $user['profilePicture']; ?>" alt="Image" width="80">
                                <?php else: ?>
                                    No image
                            <?php endif; ?>
                        </td>
                        <td><?= $user['password'] ?></td>
                        <td>
                            <a href="dbupdatefile.php?id=<?= $user['id'] ?>" class="btn btn-info" role="button">Update</a>
                            <a href="dbdeletefile.php?id=<?= $user['id'] ?>" class="btn btn-danger" role="button">Delete</a>  
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>