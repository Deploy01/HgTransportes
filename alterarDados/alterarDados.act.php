<?php

require("../connect.php");
extract($_POST);

mysqli_query($con, "UPDATE FROM `userdata_cadastro` SET `nome` = $nome");

header("location:alterarDados.php?codigo=$codigo");