<?php
session_start(); //Inicia uma sessão


if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];



    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";


    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']); //vai destruir as variáveis
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
       header('Location: sistema.php');
    }

}

else{
    //Retorna para o Login
    header('Location: login.php');
}


?>