<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema de Login</title>
</head>
<body>
    <div class="container">
        <h3>Área Restrita</h3>
        <form action="verificarlogin.php" method="post" style="width: 500px;">
            <label for="login">Login: </label>
            <input type="text" name="login" id="login" class="form-control">
            <br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" class="form-control">
            <br>
            <input type="submit" value="Entrar" class="btn btn-success">
        </form>
    </div>
</body>
</html>