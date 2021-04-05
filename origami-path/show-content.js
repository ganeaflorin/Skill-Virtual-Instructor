function showContent(clicked_id) {

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