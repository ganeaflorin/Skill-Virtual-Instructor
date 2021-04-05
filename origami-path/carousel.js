var currentStep = 0;
var noOfSteps = 0;

function showContent(clicked_id) {
    var elements = document.getElementById(clicked_id).nextElementSibling.getElementsByClassName("lesson-container__step");
    noOfSteps = elements.length;
    currentStep = 0;
    goToCard(0);
    let lessonsArray = document.getElementsByClassName("lesson");
    let lesson = lessonsArray[parseInt(clicked_id)];
    if (lesson.style.display === "none" || lesson.style.display == '') {
        lesson.style.display = "block";
    } else {
        lesson.style.display = "none";
    }
    for (let index = 0; index < lessonsArray.length; index++) {
        if (lessonsArray[index] != lesson)
            lessonsArray[index].style.display = "none";
    }
}

let pBtns = document.getElementsByClassName("pBtn");
let nBtns = document.getElementsByClassName("nBtn");
for (let i = 0; i < pBtns.length; i++) {
    pBtns[i].addEventListener('click', () => goToCard(-1));
    nBtns[i].addEventListener('click', () => goToCard(1));
}

handleActiveButtons();

function goToCard(direction /* 1 | -1 */ ) {
    var lessonSteps = document.getElementsByClassName("lesson-container__step");
    currentStep += direction;
    for (var i = 0; i < lessonSteps.length; i++) {
        lessonSteps[i].style.transform = `translateX(-${currentStep * 100}%)`;
    }

    handleActiveButtons();

    return undefined;
}

function handleActiveButtons() {
    var pBtnCss = '.pBtn:hover { background-color: #3498DB;}';
    var nBtnCss = '.nBtn:hover { background-color: #3498DB;}';

    for (let i = 0; i < pBtns.length; i++) {
        var pBtn = pBtns[i];
        var nBtn = nBtns[i];
        if (currentStep === 0) {
            pBtn.disabled = true;
            pBtn.style.backgroundColor = "#FF4136";
        } else {
            pBtn.disabled = false;
            pBtn.style.backgroundColor = "#151019";
            pBtn.style = pBtnCss;
        }
        if (currentStep === noOfSteps - 1) {
            nBtn.disabled = true;
            nBtn.style.backgroundColor = "#FF4136";
        } else {
            nBtn.disabled = false;
            nBtn.style.backgroundColor = "#151019";
            nBtn.style = nBtnCss;
        }
    }

}