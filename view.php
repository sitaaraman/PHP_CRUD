<?php

include 'dbConnection.php';

$result = $conn->query("SELECT * FROM form_database");
$form_database = $result->fetch_all(MYSQLI_ASSOC);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Show</title>
</head>
<body>

 <center><h2>Data List</h2></center>

<table class="table">
     <thead>
         <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Password</th>
            <th>Address</th>
            <th>Action</th>
         </tr>
     </thead>
 
     <tbody>
        <?php foreach($form_database as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['mo_number'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $user['address'] ?></td>
            <td>
                <a href="updatedb.php?id=<?= $user['id'] ?>" class="btn btn-info" role="button">Update</a>
                <a href="deletedb.php?id=<?= $user['id'] ?>" class="btn btn-danger" role="button">Delete</a>  
            </td>

        </tr>
        <?php endforeach; ?>
     </tbody>
 
</table>
   
</body>
</html>