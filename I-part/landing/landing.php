<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn how to do beautiful and creative things using origami,
    how to do a tie knot in a few simple steps or how to cook delicious and fast meals">
    <title>SkiVI - Your personal trainer</title>
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
            <div class="path">
                    <a href="../origami-path/origami.php" class="path__links">
                    <h1 class="path__title">Origami</h1>

                    <img src="../images/origami.png" class="paths__image" alt="Origami">

                    <p class="path__description">
                        Paper is not only for boring bureaucracy stuff! Take IT to the next level.</p>
                    </a>
                </div>
                <div class="path">
                    <a href="../tie-knot-path/tie-knot.php" class="path__links">

                    <h1 class="path__title">Tie knot</h1>
                    <img src="../images/tie.png" class="paths__image" alt="Tie-knot">

                    <p class="path__description">
                        Stop begging your wife for it! You're a big boy, tie your knot by yourself.
                    </p>
                </a>
                </div>
                <div class="path">
                    <a href="../fast-meals-path/fast-meals.php" class="path__links">
                    <h1 class="path__title">Fast meals</h1>
                    <img src="../images/meals.png" class="paths__image" alt="Meals">

                    <p class="path__description">
                        Don't ever eat junk food again. Learn how to cook simple and yuumy meals.

                    </p>
                </a>
                </div>
        </div>
    </main>

    <?php include("../repetitive/footer.php"); ?>
</body>

</html>