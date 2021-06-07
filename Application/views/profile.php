<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your SkiVI profile.">
    <title>SkiVI - Profile</title>
    <style>
        <?php
        include "./css/profile.css";
        ?>
    </style>
</head>

<body>
    <main>
        <div class="profile">
            <div class="profile__infos">
                <div class="profile__infos__avatar">
                    <img src="../images/avatar.png" alt="user avatar" class="user-avatar">
                    <button id="change-avatar" class="change-avatar"> Change avatar</button>
                </div>
                <div class="profile__infos__credentials">
                    <div class="profile__infos__credentials__field">
                        Username: <?php echo $username; ?>
                    </div>
                    <div class="profile__infos__credentials__field">
                        Email: <?php echo $email; ?>
                    </div>

                    <button onClick="location.href='../reset-password/reset-password.php'" id="change-pass"  class="change-pass">
                            Change password </button>
                    
                </div>
            </div>

            <div class="profile__skills">
                <div class="skill">
                    <p>Origami</p>
                    <div class="skill__bar">
                        <div class="skill__bar__default-progress origami-progress">
                            <p class="progress-percent"> 80%</p>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>Tie knot</p>
                    <div class="skill__bar">
                        <div class="skill__bar__default-progress tie-progress">
                            <p class="progress-percent"> 60%</p>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>Fast meals</p>
                    <div class="skill__bar">
                        <div class="skill__bar__default-progress meals-progress">
                            <p class="progress-percent"> 10%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>