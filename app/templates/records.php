<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/common.css">
    <link rel="stylesheet" href="assets/records.css">
    <title>Document</title>
</head>
<body>
<div class="delete-user-content">
    <div class="to-homepage">
        <a class="link go-back" href="/">Go Back</a>
    </div>
    <div class="user-list-content">
        <div>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody class="user-list-form">
                <?php foreach ($stmt as $item): ?>
                    <tr id="<?php echo $item["id"] ?>">
                        <td><?php echo $item["id"] ?></td>
                        <td><?php echo $item["first_name"] ?></td>
                        <td><?php echo $item["last_name"] ?></td>
                        <td><?php echo $item["email"] ?></td>
                        <td>
                            <button class="delete-btn" id="<?php echo $item["id"] ?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>