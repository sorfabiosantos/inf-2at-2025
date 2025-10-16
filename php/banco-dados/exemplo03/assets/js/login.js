console.log("Olá, login");

const formRegister = document.querySelector("#form-register");

formRegister.addEventListener("submit", async (e) => {
    e.preventDefault();

    /*
    fetch("api/users-insert.php", {
        method: 'POST',
        body: new FormData(formRegister)
    }).then((response) => {
        response.json().then((user) => {
            console.log(user)
        })
    });
    */

    const response = await fetch("api/users-insert.php", {
        method: 'POST',
        body: new FormData(formRegister)
    });
    const user = await response.json();
    console.log(user);
    toast(user.type, user.message);

});

const formLogin = document.querySelector("#form-login");
formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();

    const response = await fetch("api/users-login.php", {
        method: 'POST',
        body: new FormData(formLogin)
    });

    const user = await response.json();
    console.log(user);
    toast(user.type, user.message);
    if(user.type === "success") {
        setTimeout(() => {
            window.location.href = "user-app.html";
        }, 5000);
    }
});