
const emailValido = "usuario@email.com";
const senhaValida = "123456";
let mensagemErro = "";

document.getElementById('loginForm').onsubmit = function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    if (email === emailValido && senha === senhaValida) {
        window.location.href = "mensagem.html";
    } else {
        mensagemErro = "E-mail ou senha incorretos!";
        alert(mensagemErro);
    }
};