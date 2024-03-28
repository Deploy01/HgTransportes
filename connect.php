<?php
    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $nomeDB = "hgtransportes";

    $con = new mysqli($servidor, $user, $senha, $nomeDB);
    if($con -> error) {
        die( "Erro ao se conectar ao banco de dados" . $con -> error );
    }
    mysqli_query($con, "SET NAMES utf8");