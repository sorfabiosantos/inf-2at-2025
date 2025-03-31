

/*
let number = window.prompt("Quantos");
console.log(number);*/
const body = document.querySelector("body");
const myDiv = document.createElement("div");
const myOl = document.createElement("ol");

body.appendChild(myDiv);
myDiv.appendChild(myOl);

let myLi = document.createElement("li");
myLi.textContent = "oi";
myOl.appendChild(myLi);

myLi = document.createElement("li");
myLi.textContent = "oi";
myOl.appendChild(myLi);

myLi = document.createElement("li");
myLi.textContent = "oi";
myOl.appendChild(myLi);




