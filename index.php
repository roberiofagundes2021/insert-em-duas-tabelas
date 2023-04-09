<?php
session_start(); //Iniciar a sessao
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Celke - Cadastrar em duas tabelas</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="processa.php">
        <h3>Dados básicos</h3>

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do usuário"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail do usuário"><br><br>

        <h3>Endereço do usuário</h3>

        <label>Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro" placeholder="Endereço do usuário, ex: Rua, avenida"><br><br>

        <label>Número: </label>
        <input type="text" name="numero" id="numero" placeholder="Número endereço"><br><br>

        <input type="submit" value="Cadastrar" name="CadUsuario">
    </form>

</body>

</html>