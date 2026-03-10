<?php
$email_valido = "usuario@email.com";
$senha_valida = "123456";
$mensagem_erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($email === $email_valido && $senha === $senha_valida) {
        header("Location: pagina_inicial.html");
        exit();
    } else {
        $mensagem_erro = "E-mail ou senha incorretos!";
    }
}
?>