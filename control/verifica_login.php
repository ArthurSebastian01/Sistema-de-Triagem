<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['email'])) {
        header('Location: modelo/tela-principal.php');
        exit();
    }
?>