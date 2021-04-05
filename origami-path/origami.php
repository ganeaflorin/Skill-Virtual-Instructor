<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkiVI - Origami</title>
    <style>
        <?php include "origami.css"; ?>
    </style>

</head>

<body>
    <?php include("../repetitive/header.php"); ?>
    <main>
        <div class="path-presentation">
            <h1 class="path-presentation__title"> Origami </h1>
            <p class="path-presentation__description">
                Take a few pieces of paper, put your creative pants on,
                and lets start the lessons below!
            </p>
        </div>

        <div class="lessons">
            <ul>
                <li class="lesson-title">
                    <button id="0" onClick="showContent(this.id)" class="dropdown-button">
                        1. Airplane🔻</button>
                    <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step1</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step22222</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step3333333</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
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
                        2. Boat🔻</button>
                        <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step4</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step5</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step6</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
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
                    <button id="2" onClick="showContent(this.id)" class="dropdown-button">
                        3. Tulip🔻</button>
                        <div  class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step7</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step8</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step9</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>

                            <div class="lesson-btns">
                                <button type="button" id="prevBtn" class="pBtn">Previous step </button>

                                <button type="button" id="nextBtn" class="nBtn">Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="lesson-title">
                    <button id="3" onClick="showContent(this.id)" class="dropdown-button">
                        4. Swan🔻</button>
                        <div class="lesson">
                        <div class="lesson-container">
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step10</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step11</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>
                            <section class="lesson-container__step">
                                <div class="lesson-container__step__indication">
                                    <h3>Step12</h3>
                                    <p>This is step1</p>

                                </div>
                                <img src="../images/facebook.png" class="lesson__img">
                            </section>

                            <div class="lesson-btns">
                                <button type="button" id="prevBtn" class="pBtn ungabunga">Previous step </button>

                                <button type="button" id="nextBtn" class="nBtn">Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

<!-- //TODO: SPATII INTRE LESSONS  -->

        </div>




    </main>
    <?php include("../repetitive/footer.php"); ?>
    <!-- <script src="../origami-path/showContent.js"></script> -->
    <script src="../origami-path/carousel.js"></script>

</body>

</html>