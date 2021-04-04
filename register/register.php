<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkiVI - Register</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
<?php 
    include("../repetitive/header.php");
    ?>

    <main>
        <div class="login-form">
            <h1 class="login-form__h1">Sign Up</h1>
            <form>
                <input type="text" name="username" placeholder="Username" class="form-field" required>
                <input type="text" name="email" placeholder="Email" class="form-field" required>
                <input type="password" name="password" placeholder="Password" class="form-field" required>
                <input type="password" name="password" placeholder="Confirm password" class="form-field" required>
                <button type="submit" name="signup" class="sign-up-btn">SIGN UP</button>
            </form>
            <p class="sign-up-text">Already friends with SkiVI?</p>
            <a href="/login/login.html" class="login-btn">LOGIN</a>
        </div>
    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>