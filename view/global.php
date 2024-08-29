<?php
    session_start();

    function LoadHButton(){
        if(isset($_SESSION['cliente'])){
            echo '<a href="./controller/pdo/sair.php">Sair</a>';
        }else{
            echo '<a href="./view/pages/login/index.php">Entrar</a>';
        }
    }
?>