<?php

//use config\Db;
require ('config/Db.php');
//use config\Db;

class Crud
{

    public static  function insert($nome, $email, $numero)
    {
        try {
            $conexao = Db::connectar();
            $inserir = $conexao->prepare("INSERT INTO aluno ( nome, email, numero) VALUES (:nome, :email,:numero)");
            $inserir->bindValue(':nome', $nome);
            $inserir->bindValue(':email', $email);
            $inserir->bindValue(':numero', $numero);
            $inserir->execute();
            return $inserir;
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
    public static function delete($id)
    {
        try {
            $conexao = Db::connectar();
            $remover = $conexao->prepare("DELETE FROM aluno WHERE id = :id");
            $remover->bindValue(':id', $id);
            $remover->execute();
            return $remover;
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
    public static function update($id, $nome, $email, $numero)
    {
        try {
            $conexao = Db::connectar();
            $remover = $conexao->prepare("UPDATE aluno SET nome = :nome, email = :email, numero = :numero WHERE id = :id");
            $remover->bindValue(':id', $id);
            $remover->bindValue(':nome', $nome);
            $remover->bindValue(':email', $email);
            $remover->bindValue(':numero', $numero);
            $remover->execute();
            return $remover;
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
    public static function ShowAll()
    {
        try {
            $conexao = Db::connectar();
            $listar = $conexao->prepare("SELECT * FROM aluno");
            $listar->execute();
            return $listar->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
    public static function ShowId($id)
    {
        try {
            $conexao = Db::connectar();
            $listar = $conexao->prepare("SELECT * FROM aluno where id= :id");
            $listar->bindValue(':id', $id);
            $listar->execute();
            return $listar->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}



