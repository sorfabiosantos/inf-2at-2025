let arrayPlays = [];
const board = document.querySelector("#board");
let play = "O";

function win () {
    if(arrayPlays[1] === arrayPlays [4] && arrayPlays[1] === arrayPlays[7]) {
        console.log(`Venceu o ${arrayPlays[1]}`);
    }
}

board.addEventListener("click", (event) => {
    console.log(event.target);
    if(play === "O") {
        play = "X";
    } else {
        play = "O";
    }
    arrayPlays[event.target.getAttribute("id")] = play;
    console.table(arrayPlays);
    event.target.textContent = play;
    win();
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