


const myDiv = document.createElement("div");
console.log(myDiv);

const myOl = document.createElement("ol");
console.log(myOl);

myDiv.appendChild(myOl);
console.log(myDiv);

const myLi = document.createElement("li");
myLi.textContent = "1";
myOl.appendChild(myLi);

document.querySelector("body").appendChild(myDiv);