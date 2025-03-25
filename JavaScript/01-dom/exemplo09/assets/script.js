

document.querySelector("#content").innerHTML =
    `<ul>
      <li>Progrmação Web I</li>
      <li>Progrmação Web II</li>
      <li>Desenvolvimento de Aplicações</li>
     </ul>`;

console.log(document.querySelector("h1"));
console.log(document.querySelector("#content"));

document.querySelector("h1").remove();
document.querySelector("#content").remove();

console.log(document.querySelector("h1"));
