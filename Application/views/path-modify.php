<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php

        use app\core\Application;
        use app\core\Microservices;

        include "./css/manager.css" ?>
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/lessonSelector.js">
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        }
        xmlhttp.open("POST", "js/lessonSelector.js", true);
        xmlhttp.send();
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login into your SkiVI account.">
    <title>SkiVI - Modify lessons</title>

</head>

<body>
    <main>
    <?php $form = \app\core\form\Form::begin('', "post") ?>
        <div>
            <label for="path-select"> Choose a path to edit: </label>
            <select name="paths" id="path-select" onchange="lessonSelector(this)">
                <option value=""> Please choose an option </option>
                <?php
                foreach (Application::$app->pathNames as $lessonTitle) {
                    echo '<option value="' . strtolower($lessonTitle) . '">' . ucfirst($lessonTitle) . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="hide-select">
            <label for="choose-lesson-operation"> Choose an action: </label>
            <select name="choose-operation" , id="operation" onchange="operationSelector(this)">
                <option value=""> Please choose an option </option>
                <option value="delete"> Delete a lesson </option>
                <option value="add"> Add a lesson </option>
                <option value="update"> Update a lesson </option>
            </select>
        </div>

        <div class="hide-delete">
            <label for="delete-lesson"> Choose a lesson to delete: </label>
            <select name="delete-lesson" id="delete-lesson" onclick="deleteOptions(this)">
                <option value=""> Please choose an option </option>
            </select>
        </div>
        <div class="hide-update">
            <label for="update-lesson"> Choose a lesson to update: </label>
            <select name="update-lesson" id="update-lesson" onclick="updateOptions(this)" onchange="showSteps(this)">
                <option value=""> Please choose an option </option>
            </select>
        </div>
        <div class="hide-add">
            <label>New lesson title:
                <input type="text" name = "add-lesson"> </input>
            </label>
        </div>
        <div class="hide-update-options">
            <label for="select-update-option"> Choose an update operation: </label>
            <select name="update-option" id="update-option" onchange="updateOperations(this)">
                <option value=""> Please choose an option </option>
                <option value="add"> Add a step </option>
                <option value="update"> Update a step </option>
            </select>
        </div>
        <div class="hide-add-step">
            <label for="add-step"> Insert a step: </label>

            <label for="step-article">Article: <input name="step-article" id="step-article"> </input></label>
            <label for="step-image">Image link: <input name="step-image" id="step-image"> </input></label>
                
        </div>
        <div class="hide-steps">
            <label for="delete-lesson"> Choose a step to modify: </label>
            <select name="step-lesson" id="step-lesson" onchange="showTextbox(this)">
                <option value=""> Please choose an option </option>
            </select>
        </div>
        <div class="hide-text-box">
            <label for="modify-step">
                Change step:
                <input type="text" id="modify-step" name="modify-step"></input>
            </label>
        </div>
        <button type="submit" name="submitBtn" class="">Submit</button>
        <?php \app\core\form\Form::end() ?>
    </main>

</body>

</html>