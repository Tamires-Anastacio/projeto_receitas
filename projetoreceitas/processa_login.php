<?php
$email_valido = "usuario@email.com";
$senha_valida = "123456";
$mensagem_erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
}
?>