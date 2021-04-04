<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkiVI - Your personal trainer</title>
    <!-- <link rel="stylesheet" href="landing.css"> -->
    <style>
 <?php include "../landing/landing.css"; ?> 
</style>
</head>

<body>
    
    <?php 
    include("../repetitive/header.php");
    ?>
    <main>
        <div class="skivi-presentation">
            <div class="robot">
                <div class="head">
                    <div class="face">
                        <div class="eye"> </div>
                        <div class="eye"> </div>
                    </div>

                </div>
                <div class="body"></div>
                <div class="left-arm"></div>
                <div class="right-arm"></div>
            </div>
            <div class="skivi-presentation__div">
                <p class="skivi-says-hi">Hi! I'm SkiVI!</p>
                <p> I'll be your trainer in your learning adventure. After a long robot-life I can teach you the followings:
                </p>
            </div>
        </div>
        <div class="paths">
            <a href="" class="path__links">
                <div class="path">
                    <h1 class="path__title">Origami</h1>

                    <img src="../images/origami.png" class="paths__image" alt="Origami">

                    <p class="path__description">
                        Paper is not only for boring bureaucracy stuff! Take IT to the next level.</p>
                </div>
            </a>
            <a href="" class="path__links">

                <div class="path">

                    <h1 class="path__title">Tie knot</h1>
                    <img src="../images/tie.png" class="paths__image" alt="Tie-knot">

                    <p class="path__description">
                        Stop begging your wife for it! You're a big boy, tie your knot by yourself.
                    </p>
                </div>
            </a>
            <a href="" class="path__links">
                <div class="path">
                    <h1 class="path__title">Fast meals</h1>
                    <img src="../images/meals.png" class="paths__image" alt="Meals">

                    <p class="path__description">
                        Don't ever eat junk food again. Learn how to cook simple and yuumy meals.

                    </p>
                </div>
            </a>
        </div>
    </main>

    <?php 
    include("../repetitive/footer.php");
    ?>
</body>

</html>