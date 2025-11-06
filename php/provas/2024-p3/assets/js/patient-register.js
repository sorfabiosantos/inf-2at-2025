import { showToast } from "./functions.js";

console.log('patient-register.js');

// Função para chamar o toast ao clicar no h1 da página
document.querySelector("h1").addEventListener("click", (event) => {
    showToast("Teste de Toast", "error");
    event.stopPropagation();
});

const formPatientRegister = document.querySelector("#patientForm");
formPatientRegister.addEventListener("submit", async (event) => {
    event.preventDefault();
    // restante do código

    const response = await fetch(`api/patient-insert.php`, {
        method: "POST",
        body: new FormData(formPatientRegister)
    });

    console.log(response);
    const patient = await response.json();
    console.log(patient);
    showToast(patient.message, patient.type);

});
