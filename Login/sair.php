<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']); //vai destruir as variáveis
header('Location: login.php');
        
?>