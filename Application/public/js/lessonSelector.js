var lessons;
var chosenPath;
var chosenLesson;
var deleteWasClicked = false;
var updateWasClicked = false;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        lessons = this.responseText;
    }
}
xmlhttp.open("GET", "js/ajax_getLessons.php", true);
xmlhttp.send();

function updateOperations(dropdown) {
    value = dropdown.options[dropdown.selectedIndex].value;
    addDiv = document.getElementsByClassName("hide-add-step");
    updateDiv = document.getElementsByClassName("hide-steps");
    if (value === "add") {
        addDiv[0].style.display = "block";
        updateDiv[0].style.display = "none";
        hideSiblings(addDiv[0]);
    }
    if (value === "update") {
        updateDiv[0].style.display = "block";
        addDiv[0].style.display = "none";
    }
}

function lessonSelector(dropdown) {
    // var option_text = dropdown.options[dropdown.selectedIndex].text;
    chosenPath = dropdown.options[dropdown.selectedIndex].value;
    console.log(chosenPath);
    let select = document.getElementsByClassName("hide-select");
    select[0].style.display = "block";
    //hide all elements if path empty
    if (!chosenPath) {
        select[0].style.display = "none";
        hideSiblings(select[0]);
    }

}

function hideSiblings(currentElement) {
    let node = currentElement.nextSibling;
    while (node) {
        if (node.className && node.className.includes("hide"))
            node.style.display = "none";
        node = node.nextSibling;
    }
}

function showSteps(dropdown) {
    stepDropdownDiv = document.getElementsByClassName("hide-update-options");
    stepDropdownDiv[0].style.display = "block";
    stepSelect = document.getElementById("step-lesson");
    stepSelect.innerHTML = '';
    let defaultOpt = document.createElement('option');
    defaultOpt.value = '';
    defaultOpt.innerHTML = "Please chose an option";
    stepSelect.appendChild(defaultOpt);

    chosenLesson = dropdown.options[dropdown.selectedIndex].value;
    var lessonNames;
    var obj = JSON.parse(lessons);
    if (chosenPath === "origami")
        lessonNames = obj[0].origami;
    if (chosenPath === "tie")
        lessonNames = obj[1].tie;
    if (chosenPath === "meals")
        lessonNames = obj[2].meals;

    lessonNames = JSON.stringify(lessonNames);
    obj = JSON.parse(lessonNames);
    for (var it = 0; it < obj.length; it++) {
        let lessonTitle = obj[it].name;
        if (lessonTitle === chosenLesson) {
            var stepsJson = JSON.parse(JSON.stringify(obj[it].steps));
            for (var stepIt = 0; stepIt < stepsJson.length; stepIt++) {
                var opt = document.createElement('option');
                opt.value = stepsJson[stepIt].id;
                opt.innerHTML = "Step " + stepsJson[stepIt].id;
                stepSelect.appendChild(opt);
            }
        }
    }
    if (!chosenLesson) hideSiblings(dropdown.parentElement);
}

function operationSelector(dropdown) {
    let value = dropdown.options[dropdown.selectedIndex].value;
    let stepSelector = document.querySelectorAll(".hide-steps");
    let changeStep = document.querySelectorAll(".hide-text-box");
    if (!value) hideSiblings(dropdown.parentElement);
    if (value === "delete") {
        hideSiblings(dropdown.parentElement);
        handleOperationSelector(dropdown, "delete", "update", "add");
        stepSelector[0].style.display = "none";
        changeStep[0].style.display = "none";
    }
    if (value === "add") {
        hideSiblings(dropdown.parentElement);
        handleOperationSelector(dropdown, "add", "delete", "update");

        stepSelector[0].style.display = "none";
        changeStep[0].style.display = "none";

    }
    if (value === "update") {
        handleOperationSelector(dropdown, "update", "delete", "add");
        // hideSiblings(dropdown);
    }
}

function showTextbox(dropdown) {
    let value = dropdown.options[dropdown.selectedIndex].value;
    let textbox = document.getElementsByClassName("hide-text-box");
    textbox[0].style.display = "block";
    let node = document.querySelectorAll("#modify-step");
    var lessonNames;
    var obj = JSON.parse(lessons);
    if (chosenPath === "origami")
        lessonNames = obj[0].origami;
    if (chosenPath === "tie")
        lessonNames = obj[1].tie;
    if (chosenPath === "meals")
        lessonNames = obj[2].meals;

    lessonNames = JSON.stringify(lessonNames);
    obj = JSON.parse(lessonNames);
    for (var it = 0; it < obj.length; it++) {
        let lessonTitle = obj[it].name;
        if (lessonTitle === chosenLesson) {
            var stepsJson = JSON.parse(JSON.stringify(obj[it].steps));
            for (var stepIt = 0; stepIt < stepsJson.length; stepIt++) {
                if (stepsJson[stepIt].id === parseInt(value, 10)) {
                    node[0].value = stepsJson[stepIt].article;
                }
            }
        }
    }
    // node[0].value = "baaa";
    if (!value) {
        hideSiblings(dropdown.parentElement);
    }
}

function handleOperationSelector(dropdown, currentSelection, firstSelection, secondSelection) {
    var hideId = "hide-";
    let select = document.getElementsByClassName(hideId + currentSelection);
    select[0].style.display = "block";
    select = document.getElementsByClassName(hideId + firstSelection);
    select[0].style.display = "none";
    select = document.getElementsByClassName(hideId + secondSelection);
    select[0].style.display = "none";
}

function updateOptions(dropdown) {
    if (updateWasClicked === false) {
        createOptions(dropdown);
        updateWasClicked = true;
    }
}

function deleteOptions(dropdown) {
    if (deleteWasClicked === false) {
        createOptions(dropdown);
        deleteWasClicked = true;
    }
}

function createOptions(dropdown) {
    var lessonNames;
    var obj = JSON.parse(lessons);
    if (chosenPath === "origami")
        lessonNames = obj[0].origami;
    if (chosenPath === "tie")
        lessonNames = obj[1].tie;
    if (chosenPath === "meals")
        lessonNames = obj[2].meals;

    lessonNames = JSON.stringify(lessonNames);
    obj = JSON.parse(lessonNames);
    for (var it = 0; it < obj.length; it++) {
        let lessonTitle = obj[it].name;
        var opt = document.createElement('option');
        opt.value = lessonTitle;
        opt.innerHTML = lessonTitle;
        dropdown.appendChild(opt);
    }

}