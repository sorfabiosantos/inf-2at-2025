

let value = window.prompt("Informe o número de itens:");

for(let i = 1; i <= value; i++){
    console.log(i);
    document.querySelector("ul").innerHTML += `<li>Item ${i}</li>`;
}