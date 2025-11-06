import { showToast, openModal, closeModal} from "./functions.js";
console.log('patient-register.js');

// Teste para chamar a função showToast clicando no h1 da página onde diz `Médicos Cadastrados`
document.querySelector("h1").addEventListener("click", (event) => {
    showToast("Teste de Toast", "success");
    event.stopPropagation();
});

// Teste para chamar a função openModal clicando no primeiro botão `Editar`
document.querySelector(".edit-btn").addEventListener("click", (event) => {
    openModal();
});

document.querySelector("#closeModal").addEventListener("click", (event) => {
    closeModal();
});

document.querySelector("#cancelEdit").addEventListener("click", (event) => {
    closeModal();
});

