<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recover your SkiVI password!">
    <title>SkiVI - Login</title>
    <style> 
    <?php include "recover-password.css" ?>
    </style>
</head>

<body>
<?php 
    include("../repetitive/header.php");
    ?>

    <main>

        <div class="recover-form">
            <h1 class="recover-form__h1">Recover password</h1>
            <form>
                <input type="text" name="username" placeholder="Username" class="form-field" required>
                <input type="email" name="email" placeholder="Email" class="form-field" required>
                <button type="submit" name="recover-password" class="recover-btn">Recover</button>
            </form>
            <p class="sign-up-text">If you haven't met SkiVI yet, please sign up:</p>
            <a href="../register/register.php" class="sign-up-btn">Sign Up</a>
        </div>

    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>