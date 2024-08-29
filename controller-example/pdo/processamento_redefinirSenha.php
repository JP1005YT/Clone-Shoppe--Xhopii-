<?php
session_start();
require_once "funcoesBD.php";

$email = $_POST['inputEmail'];
$senha = strval($_POST['password']);
$senhacon = strval($_POST['passwordcon']);

if ($senha == $senhacon) {
    redefinirSenha($email,strval($senha));
}

header('Location: ./../pages/login/');

?>