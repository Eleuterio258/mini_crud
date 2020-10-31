<?php
require 'classe/Crud.php';


if (isset($_POST['id'],$_POST['nome'], $_POST['email'], $_POST['numero'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $up =Crud::update($id,$nome, $email, $numero);

    if ($up)
    {
        header("Location:alunos.php");
    }
    else{
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
