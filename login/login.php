<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login into your SkiVI account.">
    <title>SkiVI - Login</title>
    <style> 
    <?php include "login.css" ?>
    </style>
</head>
    
<body>
    <?php
    include("../repetitive/header.php");
    ?>

    <main>

        <div class="login-form">
            <h1 class="login-form__h1">Login</h1>
            <form>
                <input type="text" name="username" placeholder="Username" class="form-field" required>
                <input type="password" name="password" placeholder="Password" class="form-field" required>
                <div class="login-form__checkers">
                    <label>
                    <input type="checkbox" name="remember-me" class="remember-me">
                Remember me</label>
                    <a href="../recover-password/recover-password.php" class="forgot-password">Forgot password?</a>

                </div>

                <button type="submit" name="login" class="login-btn">LOGIN</button>
            </form>
            <p class="sign-up-text">If you haven't met SkiVI yet, please sign up:</p>
            <a href="../register/register.php" class="sign-up-btn">SIGN UP</a>
        </div>

    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>