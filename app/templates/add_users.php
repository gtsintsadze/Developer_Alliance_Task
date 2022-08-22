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
    <form method="post" class="user-content-form" novalidate>
        <div class="fname-content">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>
            <?php if (isset($errors["name"])): ?>
                <?php echo $errors["name"] ?>
            <?php endif ?>
        </div>

        <div class="lname-content">
            <label for="lname" class="first-name">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
            <?php if (isset($errors["lname"])): ?>
                <?php echo $errors["lname"] ?>
            <?php endif ?>
        </div>

        <div class="email-content">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <?php if (isset($errors["email"])): ?>
                <?php echo $errors["email"] ?>
            <?php endif ?>
            <?php if (isset($errors["email_format"])): ?>
                <?php echo $errors["email_format"] ?>
            <?php endif ?>
        </div>
        <div>
            <?php if (isset($success)): ?>
                <?php echo $success ?>
            <?php endif ?>
        </div>
        <input type="submit" class="submit-button">
    </form>
</div>
</body>
</html>