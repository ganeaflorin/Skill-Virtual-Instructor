<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn how to do an airplane, a boat or many other beautiful things from origami.">
    <title>SkiVI - Origami</title>
    <style>
       <?php include "./css/path-page.css" ?>
    </style>

</head>

<body>
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
            <?php foreach($lessons as $lesson) echo $lesson; ?>
            </ul>
        </div>

    </main>

    <script src="../js/carousel.js"></script>

</body>

</html>