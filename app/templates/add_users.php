<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/common.css">
    <link rel="stylesheet" href="assets/signup.css">
    <title>User Form</title>
</head>
<body>

<div class="add-users-container">
    <div class="user-list">
        <a class="link go-back" href="/">Go Back</a>
    </div>

    <div class="user-input-form">
        <form method="post" class="user-content-form" novalidate>
            <div class="fname-content input-container">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
                <div class="error-container">
                    <?php if (isset($errors["name"])): ?>
                        <?php echo $errors["name"] ?>
                    <?php endif ?>
                </div>
            </div>

            <div class="lname-content input-container">
                <label for="lname" class="first-name">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
                <div class="error-container">
                    <?php if (isset($errors["lname"])): ?>
                        <?php echo $errors["lname"] ?>
                    <?php endif ?>
                </div>
            </div>

            <div class="email-content input-container">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <div class="error-container">
                    <?php if (isset($errors["email"])): ?>
                        <?php echo $errors["email"] ?>
                    <?php endif ?>
                    <?php if (isset($errors["email_format"])): ?>
                        <?php echo $errors["email_format"] ?>
                    <?php endif ?>

                    <?php if (isset($errors["exists"])): ?>
                        <?php echo $errors["exists"] ?>
                    <?php endif ?>
                </div>
            </div>
            <div class="submit-btn-container">
                <input type="submit" class="submit-button">
            </div>
            <div class="success-container">
                <?php if (isset($success)): ?>
                    <?php echo $success ?>
                <?php endif ?>
            </div>
        </form>
    </div>
</div>

</body>
</html>