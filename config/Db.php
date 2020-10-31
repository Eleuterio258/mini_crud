<?php
//namespace config;
class Db
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
