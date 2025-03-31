
const body = document.querySelector("body");
const titleH1 = document.createElement("h1");
titleH1.textContent = "Disciplinas";
console.log(titleH1);
body.insertAdjacentElement("afterbegin",titleH1);

const divBox = document.createElement("div");
divBox.id = "box";
console.log(divBox);
body.insertAdjacentElement("beforeend",divBox);

const spanTitle = document.createElement("span");
spanTitle.id = "title";
spanTitle.textContent = "CAIXA";
const spanContent = document.createElement("span");
spanContent.id = "content";
spanContent.textContent = "Lista";

divBox.insertAdjacentElement("afterbegin",spanTitle);
divBox.insertAdjacentElement("beforeend",spanContent);

const divName = document.createElement("div");
divName.textContent = "Fábio Santos";
divName.id = "box";
console.log(divName);
body.appendChild(divName);