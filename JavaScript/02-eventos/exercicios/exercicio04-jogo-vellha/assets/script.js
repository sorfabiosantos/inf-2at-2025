




const board = document.querySelector("#board");
let play = "O";

board.addEventListener("click", (event) => {
    if(play === "O") {
        play = "X";
    } else {
        play = "O";
    }
    event.target.textContent = play;
});

