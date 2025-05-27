const usersList = [];

const inputName = document.querySelector("#name");
const inputEmail = document.querySelector("#email");
const inputPassword = document.querySelector("#password");
const buttonRegister = document.querySelector("#register-button");
const divUsersList = document.querySelector(".list-users");

function showUsers () {
    divUsersList.innerHTML = "";
    usersList.forEach((user, index) => {
        const newUser = document.createElement("div");
        newUser.className = "user-row";
        newUser.setAttribute("userId", index);
        newUser.innerHTML = `
            <span class="user-name">${user.name}</span>
            <span class="user-email">${user.email}</span>
            <button class="remove-user">Remover</button>
    `;
        //console.log(newUser);
        divUsersList.appendChild(newUser);
    });

    const deleteButtons = document.querySelectorAll(".remove-user");
    //console.log(deleteButtons);
    deleteButtons.forEach((deleteButton) => {
        console.log(deleteButton);
        deleteButton.addEventListener("click", () => {
            console.log("Excluir: ", deleteButton.parentElement.getAttribute("userId"));
            usersList.splice(deleteButton.parentElement.getAttribute("userId"), 1);
            showUsers();
        });
    });

}

buttonRegister.addEventListener("click", () => {
    //console.log("Cadastrar");
    usersList.push({
        name: inputName.value,
        email: inputEmail.value,
        password: inputPassword.value
    });
    //console.log(usersList);
    showUsers();
});