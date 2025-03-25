

document.querySelector("#content").innerHTML =
    `<ul>
      <li>Progrmação Web I</li>
      <li>Progrmação Web II</li>
      <li>Desenvolvimento de Aplicações</li>
     </ul>`;

/*console.log(document.querySelector("h1"));
console.log(document.querySelector("#content"));
document.querySelector("h1").remove();
document.querySelector("#content").remove();
console.log(document.querySelector("h1"));*/

console.log(document.querySelector("span"));
const spanBox = document.querySelector("span");
console.log(spanBox);
spanBox.insertAdjacentHTML("beforebegin","<span class='red'>Antes do Ínicio</span>");
spanBox.insertAdjacentHTML("afterend","<span class='red'>Depois do Final</span>");

spanBox.insertAdjacentHTML("afterbegin","<span class='red'>Depois do Ínicio</span>");
spanBox.insertAdjacentHTML("beforeend","<span class='red'>Antes do Final</span>");
