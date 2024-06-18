<?php
session_start();
require_once "funcoesBD.php";

$email = $_POST['inputEmail'];
$senha = $_POST['password'];
$senhacon = $_POST['passwordcon'];

if ($senha == $senhacon) {
    redefinirSenha($email,$senha);
}

header('Location: ./../pages/login/');

?>