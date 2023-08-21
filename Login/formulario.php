<?php



    if(isset($_POST['submit'])){
        
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco =  $_POST['endereco'];

        $result = mysqli_query($conexao, "insert into usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) values('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
        
        header('Location: login.php');
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulário</title>
</head>
<body>

    <div class="box" >

        <form action="" method="post">
            <h1><b>Cadastro</b></h1>
            <br><br>
            <div class="input_box">
                <input type="text" name="nome" id="nome" class="inputuser" required>
                <label for="nome" class="label_input">Nome Completo</label>
            </div>
            <br><br>
            <div class="input_box">
                <input type="text" name="email" id="email" class="inputuser" required>
                <label for="email" class="label_input">E-mail</label>
            </div>
            <br><br>
            <div class="input_box">
                <input type="password" name="senha" id="senha" class="inputuser" required>
                <label for="senha" class="label_input">Senha</label>
            </div>
            <br><br>
            <div class="input_box">
                <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                <label for="telefone" class="label_input">Telefone</label>
            </div>
            <br><br>

            <p>Sexo:</p>
            <br>
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino" class="feminino">Feminino</label>
            <br>
            <br>
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br><br>
            <div class="input_box">
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="inputuser" required>
            </div>
            <br><br>
            <div class="input_box">
                <input type="text" name="cidade" id="cidade" class="inputuser" required>
                <label for="cidade" class="label_input">Cidade</label>
            </div>
            <br><br>
            <div class="input_box">
                <input type="text" name="estado" id="estado" class="inputuser" required>
                <label for="estado" class="label_input">Estado</label>
            </div>
            <br><br>
            <div class="input_box">
                <input type="text" name="endereco" id="endereco" class="inputuser" required>
                <label for="endereco" class="label_input">Endereço</label>
            </div>
            <br><br>
            <input type="submit" id="submit" name="submit">
        </form>
        <br><br><br>
        <div class="text">
        Já tem Cadastro? <a href="login.php">Entrar</a>
        <br><br>
        Ir para o <a href="home.php">Home</a>
        </div>
    </div>
   
</body>
</html>