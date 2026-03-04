<?php
$email_valido = "usuario@email.com";
$senha_valida = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === $email_valido && $senha === $senha_valida) {
        header("Location: receitas.php");
        exit();
    } else {
        echo "<script>alert('Email ou senha incorretos!'); window.location.href='index.php';</script>";
    }
}
?>