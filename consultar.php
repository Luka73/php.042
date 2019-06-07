<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Tela de Consulta</title>
    <script>
        function excluir(id){
            if(confirm('Deseja realmente excluir este usuários?')){
                location.href = 'excluir.php?id=' + id;   
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Consultar</h3>
        <form style="width:300px">
            <label>E-mail: </label>
            <input type="text" name="login" class="form-control">
            <br>
            <input type="submit" class="btn btn-info" value="Buscar">
        </form><hr>
        <?php
            if(isset($_GET["login"])){
                $login = $_GET["login"];
                include_once 'conexao.php';
                $sql = "select * from usuarios where login like '$login%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <table class="table table-striped">
                        <tr>
                            <th>E-mail</th>
                            <th>Perfil</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){
                          $perfil=($row["perfil"] == "admin") ? "Administrador" : "Usuário";
                        ?>
                              <tr>
                                  <td><?php echo $row["login"]?></td>
                                  <td><?php echo $perfil; ?></td>
                                  <td><a href="editar.php?id=<?php echo $row['id']?>"><i class="fas fa-user-edit"></i></a></td>
                                  <td>
                                      <a href="#" onclick="excluir( <?php echo $row['id']; ?> )">
                                          <i class="fas fa-trash-alt"></i>
                                      </a>
                                  </td>
                              </tr>
                        <?php } ?>
                    </table>
                <?php } else { echo "Nenhum registro encontrado"; }
            } ?> <br>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>