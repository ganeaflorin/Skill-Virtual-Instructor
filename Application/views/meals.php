<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn how to do a fast and delicious meals such as sandwich, omlete or pancakes.">
    <title>SkiVI - Fast meals</title>
    <style>
        <?php include "./css/path-page.css"; ?>
    </style>

</head>

<body>
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
            <?php foreach($lessons as $lesson) echo $lesson; ?>
            </ul>
        </div>
        
    </main>
    <script src="../js/carousel.js"></script>

</body>

</html>