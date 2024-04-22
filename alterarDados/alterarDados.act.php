<?php

require("../connect.php");

mysqli_query($con, "UPDATE FROM `userdata_cadastro` SET `nome` = '$nome' WHERE `id` = '$id'");

header("location:alterarDados.php?id=$id");

// https://coolors.co/palette/0d1b2a-1b263b-415a77-778da9-e0e1dd
