<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login into your SkiVI account.">
    <title>SkiVI - Login</title>
    <style> 
    <?php include "./css/login.css" ?>
    </style>
</head>
    
<body>
    <main>

        <div class="login-form">
            <h1 class="login-form__h1">Login</h1>
            <?php $form = \app\core\form\Form::begin('', "post") ?>
            <?php echo $form->field($model, 'username') ?>
            <?php echo $form->field($model, 'password')->passwordField() ?>
                <div class="login-form__checkers">
                    <label>
                    <input type="checkbox" name="remember-me" class="remember-me" id = "remember-me">
                Remember me</label>
                    <a href="../recover-password/recover-password.php" class="forgot-password">Forgot password?</a>

                </div>

                <button type="submit" name="login" class="login-btn">LOGIN</button>
                <?php \app\core\form\Form::end() ?>
            <p class="sign-up-text">If you haven't met SkiVI yet, please sign up:</p>
            <a href="register" class="sign-up-btn">SIGN UP</a>
        </div>

    </main>

</body>

</html>