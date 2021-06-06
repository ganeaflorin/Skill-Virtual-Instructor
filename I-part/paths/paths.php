<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn how to do origami, a tie knot or even
    cook fast and delicious meals with SkiVI!">
    <title>SkiVI - Paths</title>
    <style> 
    <?php include "paths.css" ?>
    </style>
</head>

<body>
    <?php
    include("../repetitive/header.php");
    ?>

    <main>

        <div class="main__path-section main__path-section-skivi">
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
            <div class="path-description path-description-skivi">
                <h1>Your personal trainer</h1>
                <p>Hi, my name is SkiVI! I was born on the exoplanet Samagiya located in Stapin solar system. After a long journey from a planet to another, I've arrived on Earth and I found out that this is the most interesting one. Even though I am 850
                    robot years old, I learned a lot of new things here and I am capable to teach you some of them. </p>
            </div>
        </div>
        <a href="../origami-path/origami.php" class="main__path-link">
            <div class="main__path-section">
                <div class="path-description">
                    <h1>Origami</h1>
                    <p>At its essence, origami is the traditional Japanese game of folding elaborately designed paper into a myriad of shapes, typically plants, animals, and other living things. Part of what makes origami unique is the fact that it simply
                        requires a piece of paper and a creative imagination. </p>
                </div>
                <img src="../images/origami.png" alt="origami" class="path-image">

            </div>
        </a>
        <a href="../tie-knot-path/tie-knot.php" class="main__path-link">
            <div class="main__path-section"><img src="../images/tie.png" alt="tie-knot" class="path-image">
                <div class="path-description">
                    <h1>Tie knot</h1>
                    <p>Want to signal power? What about trust in a business relationship? Or casual approachability? One subconscious signal can give this. The TIE KNOT! Why? It’s a subliminal message that speaks to our attention to detail. Don’t believe
                        me? Look at nearly every president. </p>
                </div>
            </div>
        </a>
        <a href="../fast-meals-path/fast-meals.php" class="main__path-link">
            <div class="main__path-section">
                <div class="path-description">
                    <h1>Fast meals</h1>
                    <p>Choose easy meals to cook fast! So go for omelets, quiches, pasta, seared lean meat and fish, eggs, rice, raw vegetables and fruit… all of these dishes are easily made in less than 20 minutes… Even less. Also think about recycling
                        your leftovers: some minced cold chicken in an omelet or a salad will always do the trick! </p>
                </div>
                <img src="../images/meals.png" alt="meals" class="path-image">

            </div>
        </a>
    </main>

    <?php include("../repetitive/footer.php"); ?>
</body>

</html>