<?php
    session_start();
    extract($_POST);

    if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true) {
    }
