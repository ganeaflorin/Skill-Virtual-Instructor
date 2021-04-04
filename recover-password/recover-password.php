<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkiVI - Login</title>
    <link rel="stylesheet" href="recover-password.css">
</head>

<body>
<?php 
    include("../repetitive/header.php");
    ?>

    <main>

        <div class="login-form">
            <h1 class="login-form__h1">Recover password</h1>
            <form>
                <input type="text" name="username" placeholder="Username" class="form-field" required>
                <input type="email" name="email" placeholder="Email" class="form-field" required>
                <button type="submit" name="recover-password" class="login-btn">Recover</button>
            </form>
            <p class="sign-up-text">If you haven't met SkiVI yet, please sign up:</p>
            <a href="/register/register.html" class="sign-up-btn">Sign Up</a>
        </div>

    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>