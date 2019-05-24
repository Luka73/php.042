<?php
session_start();

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "SELECT * FROM usuarios WHERE login='".$login."' AND 
senha='".$senha."'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1){
    //echo "Logado!";
    $row = mysqli_fetch_array($result);
    $_SESSION["login"] = $row["login"];
    $_SESSION["perfil"] = $row["perfil"];
    header("location:painel.php");
    
}else{
    $msg = "Login/Senha inválidos";
    header("location:index.php?erro=".$msg);
}


?>