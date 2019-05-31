<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
    <?php include_once 'validar.php'; ?>
    <h2>Painel do Sistema</h2>
    
    <?php
        echo "Seja bem-vindo(a), ".$_SESSION["login"];
    ?>
    <br><br>
    
    <h3>Menu</h3>
    <?php
        if($_SESSION["perfil"] == 'admin')
            echo "<a href='cadastrar.php'>Cadastrar Usuário</a><br>"
    ?>
    <a href="consultar.php">Consultar Usuário</a><br>
    <a href="alterar-senha.php">Alterar Senha</a><br>
    <a href="sair.php">Sair</a>    

</body>
</html>




