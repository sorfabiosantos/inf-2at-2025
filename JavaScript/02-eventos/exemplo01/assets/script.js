

const button = document.querySelector("button");

function clickHare () {
    button.textContent = "Fui clicado";
}

button.addEventListener("click",clickHare);