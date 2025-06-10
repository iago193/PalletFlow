<?php

namespace App;

use PDO;
use PDOException;

class Connection {

    private static $host = 'localhost';
    private static $dataBase = 'twitter_clone';
    private static $user = 'root';
    private static $senha = '';

    public static function getDb() {
        try {
            $conn = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dataBase . ";charset=utf8",
                self::$user,
                self::$senha
            );

            // Ativar modo de erro do PDO
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (PDOException $e) {
            echo 'Erro na conexão: ' . $e->getMessage();
            return null;
        }
    }
}

?>
