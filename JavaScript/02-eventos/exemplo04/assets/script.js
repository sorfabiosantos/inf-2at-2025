

const button = document.querySelector("button");

function mySum ()
{
    const value01 = document.querySelector("#value01");
    const value02 = document.querySelector("#value02");
    let sum = Number(value01.value) + Number(value02.value);
    document.querySelector("#result").textContent = sum;
}

button.addEventListener("click", mySum);


