let navBtn = document.getElementById("nav-btn");

function showNav() {

    let navBar = document.getElementsByClassName("nav-bar");
    if (navBar[0].style.display === "flex" && navBtn.style.display != "inline-block") {
        navBar[0].style.display = "none";
    } else {
        navBar[0].style.display = "flex";
        navBar[0].style.flexDirection = "column";
    }
}