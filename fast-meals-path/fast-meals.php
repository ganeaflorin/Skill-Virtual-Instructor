<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkiVI - Fast meals</title>
    <style>
        <?php include "../repetitive/path-page.css"; ?>
    </style>

</head>

<body>
    <?php include("../repetitive/header.php"); ?>
    <main>
        <div class="path-presentation">
            <h1 class="path-presentation__title"> Fast meals </h1>
            <p class="path-presentation__description">
                Take your old and clean apron, put your creative pants on, get in the kitchen
                and lets start the lessons below!
            </p>
        </div>

        <div class="lessons">
            <ul>
                <li class="lesson-title">
                    <button id="0" onClick="showContent(this.id)" class="dropdown-button">
                        1. Omelet</button>
                    <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Ingredients</h3>
                                    <p>For this recipe, you will need the followings: 2 eggs, 2 tbsp. water, 1/8 tsp. salt, dash of pepper, 1 tsp. butter, topping.</p>

                                </div>
                                <img src="../images/ingredients.png" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 1</h3>
                                    <p>BEAT eggs, water, salt and pepper in small bowl until blended.</p>

                                </div>
                                <img src="../images/omelete1.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 2</h3>
                                    <p>HEAT butter in 7 to 10-inch nonstick omelet pan or skillet over medium-high heat until hot. TILT pan to coat bottom. POUR IN egg mixture. Mixture should set immediately at edges.</p>

                                </div>
                                <img src="../images/omelete2.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 3</h3>
                                    <p>GENTLY PUSH cooked portions from edges toward the center with inverted turner so that uncooked eggs can reach the hot pan surface. CONTINUE cooking, tilting pan and gently moving cooked portions as needed.</p>

                                </div>
                                <img src="../images/omelete3.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 4</h3>
                                    <p>When top surface of eggs is thickened and no visible liquid egg remains, PLACE filling on one side of the omelet. FOLD omelet in half with turner. With a quick flip of the wrist, turn pan and INVERT or SLIDE omelet onto plate. SERVE immediately.</p>

                                </div>
                                <img src="../images/omelete4.jpg" class="lesson__img" alt="">
                            </section>
                            

                            <div class="lesson-btns">
                                <button type="button" id="prevBtn"  class="pBtn">Previous step </button>

                                <button type="button" id="nextBtn"  class="nBtn">Next step
                                </button>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="lesson-title">
                    <button id="1" onClick="showContent(this.id)" class="dropdown-button">
                        2. Sandwich </button>
                        <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Ingredients</h3>
                                    <p>For this recipe, you will need the followings: 3 slices of bread, 4 bacon strips, butter, mayo, cheese slices, breaded chicken breast, lettuce, tomato.</p>

                                </div>
                                <img src="../images/ingredients.png" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 1</h3>
                                    <p>Get a slice of bread</p>

                                </div>
                                <img src="../images/sandwich1.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 2</h3>
                                    <p>Add butter</p>

                                </div>
                                <img src="../images/sandwich2.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 3</h3>
                                    <p>Grill the slice of bread</p>

                                </div>
                                <img src="../images/sandwich3.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 4</h3>
                                    <p>Get another slice of bread</p>

                                </div>
                                <img src="../images/sandwich4.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 5</h3>
                                    <p>Toast it</p>

                                </div>
                                <img src="../images/sandwich5.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 6</h3>
                                    <p>Add mayo to both sides</p>

                                </div>
                                <img src="../images/sandwich6.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 7</h3>
                                    <p>Get one more slice of bread and grill it.</p>

                                </div>
                                <img src="../images/sandwich7.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 8</h3>
                                    <p>Cook 4 bacon strips until they are cooked but still tender</p>

                                </div>
                                <img src="../images/sandwich8.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 9</h3>
                                    <p>Place them on the grilled bread</p>

                                </div>
                                <img src="../images/sandwich9.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 10</h3>
                                    <p>On top of the bacon add a slice of cheese</p>

                                </div>
                                <img src="../images/sandwich10.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 11</h3>
                                    <p>On top of the cheese add a breaded chicken breast</p>

                                </div>
                                <img src="../images/sandwich11.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 12</h3>
                                    <p>Add the toasted slice</p>

                                </div>
                                <img src="../images/sandwich12.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 13</h3>
                                    <p>Add Lettuce and tomato</p>

                                </div>
                                <img src="../images/sandwich13.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 14</h3>
                                    <p>Put the last grilled slice on top.</p>

                                </div>
                                <img src="../images/sandwich14.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Final step</h3>
                                    <p>Enjoy your fresh toast.</p>

                                </div>
                                <img src="../images/sandwich15.jpg" class="lesson__img" alt="">
                            </section>
                            <div class="lesson-btns">
                                <button type="button" class="pBtn">Previous step </button>

                                <button type="button" class="nBtn">Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="lesson-title">
                    <button id="2" onClick="showContent(this.id)" class="dropdown-button">
                        3. Pancakes </button>
                        <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Ingredients</h3>
                                    <p>For this recipe, you will need the followings: 1 cup flour, 2 tsps baking powder, 2 tsps sugar, pinch of salt, 3/4 cup milk, 1 egg, 2 tbsps oil, 2-3 tbsps butter.</p>

                                </div>
                                <img src="../images/ingredients.png" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 1</h3>
                                    <p>Measure out your dry ingredients. In a large mixing bowl, combine 1 cup of flour, 2 teaspoons baking powder, 2 teaspoons sugar and a pinch of salt.</p>

                                </div>
                                <img src="../images/pancake1.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 2</h3>
                                    <p>Add milk and an egg. Crack one egg into the well you made in the dry ingredients. Pour roughly ¾ cup of milk into the well. </p>

                                </div>
                                <img src="../images/pancake2.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 3</h3>
                                    <p>Whisk until the batter thickens. Whisk the ingredients together vigorously until it becomes a batter. </p>

                                </div>
                                <img src="../images/pancake3.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 4</h3>
                                    <p>Let the batter rest for a few minutes. Set a timer for 3-5 minutes and give the batter time to rest.</p>

                                </div>
                                <img src="../images/pancake4.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 5</h3>
                                    <p>Choose a griddle or skillet that is flat and large enough to cook several pancakes at once. Place the skillet on the cooktop and have the batter and the rest of your ingredients close by.</p>

                                </div>
                                <img src="../images/pancake5.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 6</h3>
                                    <p>Turn on the stove to a medium heat. Let the cooktop begin to warm up the skillet or griddle. It’s essential to bring the cooking surface to the right temperature.</p>

                                </div>
                                <img src="../images/pancake6.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 7</h3>
                                    <p>Heat 1tbsp of oil or butter in the skillet. Pour about 2 tablespoons of canola oil into the skillet, or use 2-3 tablespoons of butter, or a combination of the two. </p>

                                </div>
                                <img src="../images/pancake7.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 8</h3>
                                    <p>Ladle on the pancake batter in small circles. Use a deep ladle to pour the pancake batter onto the hot cooking surface. Aim to make each pancake 3-4 inches in diameter. </p>

                                </div>
                                <img src="../images/pancake8.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 9</h3>
                                    <p>Cook the pancakes until they begin to bubble. Depending on the heat of the skillet and the size of the pancakes, they’ll need to cook for somewhere between 30 seconds and a minute on each side. </p>

                                </div>
                                <img src="../images/pancake9.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 10</h3>
                                    <p>Flip the pancakes over and continue cooking on the other side. Flip each pancake over with a spatula. Let the pancakes cook for another 20-30 seconds on the opposite side. </p>

                                </div>
                                <img src="../images/pancake10.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step 11</h3>
                                    <p>Remove the pancakes from the heat when they’re golden brown. Once both sides are a nice golden brown, take them out of the skillet and divvy them up amongst your hungry eaters. </p>

                                </div>
                                <img src="../images/pancake11.jpg" class="lesson__img" alt="">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step final</h3>
                                    <p>Serve with your favorite toppings. Stack your pancakes high and top them with a square of butter or a drizzle of maple syrup or honey.</p>

                                </div>
                                <img src="../images/pancake12.jpg" class="lesson__img" alt="">
                            </section>
                            <div class="lesson-btns">
                                <button type="button" class="pBtn">Previous step </button>

                                <button type="button" class="nBtn">Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
               
            </ul>
        </div>




    </main>
    <?php include("../repetitive/footer.php"); ?>
    <script src="../repetitive/carousel.js"></script>

</body>

</html>