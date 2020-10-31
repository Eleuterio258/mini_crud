<?php
require 'classe/Crud.php';


if (isset($_POST['nome'], $_POST['email'], $_POST['numero'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $cadatrar = Crud::insert($nome, $email, $numero);

    if ($cadatrar)
    {
        header("Location:alunos.php");
    }
    else{
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
