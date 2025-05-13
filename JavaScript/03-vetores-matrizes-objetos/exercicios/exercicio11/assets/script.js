const name = document.querySelector("#name");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const buttonAdd = document.querySelector("#add-user");
let listUsers = [];

const listUsersUl = document.querySelector("#user-list");

function showUsers () {
    listUsersUl.innerHTML = "";
    listUsers.forEach((value, index) => {
        console.log(value.name, value.email, index)
        const li = document.createElement("li");
        li.setAttribute("userId", index);
        li.innerHTML = `
              Name: ${value.name}, Email: ${value.email}
              <button class="delete">Excluir</button>
              <button class="edit">Editar</button>
        `;
        listUsersUl.appendChild(li);
    });


}

buttonAdd.addEventListener("click", () => {
    listUsers.push(
        {
            name: name.value,
            email: email.value,
            password: password.value
        }
    );
    //console.log(listUsers);
    //console.table(listUsers);
    showUsers();
});

