<?php
session_start();
require_once "funcoesBD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['inputEmail']) && isset($_POST['inputSenha'])) {
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        $cliente = loginCliente($email, $senha);

        if ($cliente) {
            $_SESSION['cliente'] = $cliente;
            header('Location: ./../index.php');
            exit;
        } else {
            $_SESSION['erro'] = "Email ou senha incorretos.";
            echo $cliente;
            header('Location: ../pages/login/index.php');
            exit;
        }
    } else {
        $_SESSION['erro'] = "Por favor, preencha todos os campos.";
        header('Location: ../pages/login/index.php');
        exit;
    }
} else {
    $_SESSION['erro'] = "Método de requisição não permitido.";
    header('Location: ../pages/login/index.php');    
    exit;
}
?>