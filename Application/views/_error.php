<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="error" content="Error-page">
    <title>SkiVI - Error</title>
    <style>
        <?php include "./css/_error.css" ?>
    </style>
</head>
<body>
<main>
<h3> 
<?php echo $exception->getCode() ?> - <?php echo $exception->getMessage()?>
</h3>
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
        </main>
    </body>