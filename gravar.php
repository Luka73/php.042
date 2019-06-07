<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
    <body class="container">

        <?php
        $login      = $_POST["login"];
        $senha      = md5($_POST["senha"]);
        $confirma   = md5($_POST["confirmasenha"]);
        $perfil     = $_POST["perfil"];

        if($senha != $confirma){
            echo "<p class='alert alert-danger'>Senhas não conferem!</p>";
        }
        else{ 
            include_once 'conexao.php';

            $sql = "INSERT INTO usuarios VALUES(null,'{$login}','{$senha}','{$perfil}')";

            if(mysqli_query($con, $sql)){
                echo "<p class='alert alert-success'>Gravado com sucesso!</p>";
            }else{
                echo "<p class='alert alert-danger'>Erro ao gravar!</p>";
            }
        } ?>
        <br>
        <a href="index.php">Página Inicial</a>
    </body>
</html>