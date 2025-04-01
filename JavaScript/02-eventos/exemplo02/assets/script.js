

const div = document.querySelector("div");

function mouseEnter () {
    div.textContent = "Mouse na div";
}

function mouseLeave () {
    div.textContent = "Mouse saiu da div";
}

div.addEventListener("mouse", mouseEnter);
div.addEventListener("mouseleave", mouseLeave);