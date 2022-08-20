<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/signup.css">
    <title>User Form</title>
</head>
<body>
<div class="user-list">
    <a href="/">Home Page</a>
</div>

<div class="user-input-form">
    <form method="post" class="user-content-form">
        <div class="fname-content">
            <label for="fname" >First Name:</label>
            <input type="text" id="fname" name="fname" required>
        </div>

        <div class="lname-content">
            <label for="lname" class="first-name">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
        </div>

        <div class="email-content">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <input type="submit" class="submit-button">
    </form>
</div>
</body>
</html>