




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

// reset do jogo da velha
const reset = document.querySelector("#reset");
reset.addEventListener("click", () => {
    console.log("reset");
    const listCell = document.querySelectorAll(".cell");
    console.log(listCell);
    for (let i = 0; i < listCell.length; i++){
        console.log(listCell[i]);
        listCell[i].textContent = "";
    }
});