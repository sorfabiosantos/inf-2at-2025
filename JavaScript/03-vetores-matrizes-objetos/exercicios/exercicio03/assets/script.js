let arrayNames = [];
const nameList = document.querySelector("#name-list");
const name = document.querySelector("#name");
const buttonAdd = document.querySelector("#add");
const buttonRemove = document.querySelector("#remove");

function showList () {
    nameList.textContent = "";
    for(let i = 0; i < arrayNames.length; i++){
        console.log(arrayNames[i]);
        const newName = document.createElement("li");
        newName.textContent = arrayNames[i];
        newName.setAttribute("index", i);
        console.log(newName);
        nameList.appendChild(newName);
    }
}

buttonAdd.addEventListener("click", () => {
    arrayNames.push(name.value);
    showList();
});

buttonRemove.addEventListener("click", (event) => {
    console.log("Remover");
    console.log(event.target.getAttribute("index"));
});

nameList.addEventListener("click", (event) => {
    console.log(event.target);
});