<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Become part of SkiVI family!">
    <title>SkiVI - Sign Up</title>
    <style> 
    <?php


include "./css/register.css" ?>
    </style>
</head>

<body>

    <main>
        <div class="register-form">
            <h1 class="register-form__h1">Sign Up</h1>
            <?php $form = \app\core\form\Form::begin('', "post") ?>
            <?php echo $form->field($model, 'username') ?>
            <?php echo $form->field($model, 'email') ?>
            <?php echo $form->field($model, 'password')->passwordField() ?>
            <?php echo $form->field($model, 'cPassword')->passwordField() ?>
            <button type="submit" name="signup" class="sign-up-btn">SIGN UP</button>
            <?php \app\core\form\Form::end() ?>
            <p class="login-text">Already friends with SkiVI?</p>
            <a href="login" class="login-btn">LOGIN</a> 
        </div>
    </main>

</body>

</html>