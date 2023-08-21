<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="tela_login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        
        <input type="submit" class="inputSubmit" name="submit" value="Enviar">
        <br><br><br>
        </form>
        <div class="text">
        Não tem Login? <a href="formulario.php">Cadastre-se</a>
        <br><br>
        Ir para o <a href="home.php">Home</a>
        </div>
        
    </div>
    
    
</body>
</html>