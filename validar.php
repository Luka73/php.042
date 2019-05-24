<?php
    session_start();
    if(!$_SESSION["login"]){
        session_destroy();
        $msg = "Usuário sem acesso!";
        header("location:index.php?erro=".$msg);
    }

?>