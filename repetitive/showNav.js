let navBtn = document.getElementById("nav-btn");
let navBar = document.getElementsByClassName("nav-bar");

function showNav() {

    if (navBar[0].style.display === "flex") {
        navBar[0].style.display = "none";
        navBar[0].style.flexDirection = "row";
    } else {
        navBar[0].style.display = "flex";
        navBar[0].style.flexDirection = "column";
    }
    if (navBtn.style.display === "none") {
        navBar[0].style.display = "flex";
    }
}