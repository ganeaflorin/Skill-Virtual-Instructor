<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reset your SkiVI password">
    <title>SkiVI - Reset password</title>
    <style> 
    <?php include "reset-password.css" ?>
    </style>
</head>

<body>
<?php 
    include("../repetitive/header.php");
    ?>

    <main>

        <div class="login-form">
            <h1 class="login-form__h1">Reset password</h1>
            <form>
                <input type="password" name="current-password" placeholder="Current password" class="form-field" required>
                <input type="password" name="new-password" placeholder="New password" class="form-field" required>
                <button type="submit" name="reset-password" class="login-btn">Reset</button>
            </form>
           
        </div>

    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>