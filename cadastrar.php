<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container">
        <h3>Cadastro</h3>
        <form action="gravar.php" method="post" style="width:300px" class="pure-form">
            <input type="text" name="login" class="form-control"placeholder="Login/E-mail"><br>
            
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"><br>
            
            <input type="password" name="confirmasenha" id="confirmasenha" class="form-control" placeholder="Confirmar Senha" ><br>
            
            
            <select name="perfil" placeholder=" - Perfil - " class="form-control">
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <br>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>  
        <br>
        <a href="index.php">Página Inicial</a>
    </div>
    <script>
        $(document).ready(function(){
            $("#confirmasenha").focusout(function(){
                if($(this).val() != $("#senha").val()){
                    alert('Senhas diferentes!');
                }
          });
        });
    </script>
</body>
</html>