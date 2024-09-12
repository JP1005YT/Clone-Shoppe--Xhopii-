<?php
include_once '../../../controller/Controller.php';
$controller = new Controller();


$email = $_POST['inputEmail'];
$senha = $_POST['inputSenha'];

$controller->login($email, $senha);


?>