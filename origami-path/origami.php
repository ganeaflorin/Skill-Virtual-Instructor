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
                    <div id="lesson" class="lesson">Alohaaa </div>


                </li>
                <li class="lesson-title">
                    <button id="1" onClick="showContent(this.id)" class="dropdown-button">
                        2. Boat🔻</button>
                    <div class="lesson">Alohaaa </div>
                </li>


                <li class="lesson-title">
                    <button id="2" onClick="showContent(this.id)" class="dropdown-button">
                        3. Tulip🔻</button>
                    <div class="lesson">Alohaaa </div>
                </li>
                <li class="lesson-title">
                    <button id="3" onClick="showContent(this.id)" class="dropdown-button">
                        4. Swan🔻</button>
                    <div class="lesson">baaa </div>
                </li>
            </ul>



        </div>




    </main>
    <?php include("../repetitive/footer.php"); ?>
    <script src="../origami-path/show-content.js"></script>
</body>

</html>