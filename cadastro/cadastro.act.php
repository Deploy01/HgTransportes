<?php
    require('../connect.php');
    session_start();

    extract($_POST);

    $hash_senha = password_hash($senha, PASSWORD_DEFAULT);

    $msg = "";
    $destino = "location:../index/index.php";

    if($confimacaoSenha != $senha) {
        echo "<p>As senhas digitadas devem ser iguais </p>";
        header("location:cadastro.php");
    }else {
        if(mysqli_query($con, "INSERT INTO `userdata_cadastro` (`id`, `nome`, `email`, `doc`, `senha`) VALUES (null, '$nome', '$email', '$doc', '$hash_senha');")) {
            $msg = "<p class='sucesso'> Registrado </p>";
        } else {
            $msg = "Deu erro";
        }
    
        
    
        $_SESSION['msg'] = $msg;
    
    
        header ($destino);
    }