<?php


abstract class BancoDados
{
    const host = 'localhost';
    const dbname = 'crud';
    const dbusername = 'root';
    const dbpassword = '';


    public static function connectar()
    {
        try {
            $pdo = new \PDO(
                "mysql:
            host=" . self::host . ";
            dbname=" . self::dbname . ";
            charset=utf8",
                self::dbusername,
                self::dbpassword
            );
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
abstract class Insert
{
    public static function alunos($nome, $email, $numero)
    {
        try {
            $conexao = BancoDados::connectar();
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
}
abstract class Delete
{
    public static function alunos($id)
    {
        try {
            $conexao = BancoDados::connectar();
            $remover = $conexao->prepare("DELETE FROM aluno WHERE id = :id");
            $remover->bindValue(':id', $id);
            $remover->execute();
            return $remover;
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
abstract class Update
{
    public static function alunos($id, $nome, $email, $numero)
    {
        try {
            $conexao = BancoDados::connectar();
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
}
abstract class ShowAll
{
    public static function alunos()
    {
        try {
            $conexao = BancoDados::connectar();
            $listar = $conexao->prepare("SELECT * FROM aluno");
            $listar->execute();
            return $listar->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
abstract class ShowId
{
    public static function alunos($id)
    {
        try {
            $conexao = BancoDados::connectar();
            $listar = $conexao->prepare("SELECT * FROM aluno where id= :id");
            $listar->bindValue(':id', $id);
            $listar->execute();
            return $listar->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}

$text = Update::alunos(6, "1", "7", "7");
