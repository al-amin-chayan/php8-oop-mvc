<?php

namespace App\Core\Database;

use PDO;
use PDOException;
use Exception;

class DB {

    protected static PDO $pdo;

    private function __construct(array $config)
    {
        try{
            self::$pdo = new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], 
                $config['username'], 
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e) {
            die($e->getMessage());
        } catch(Exception $e) {
            die($e->getMessage());   
        }
    }

    public static function connect(array $config): PDO
    {
        if (! isset(self::$pdo)) {
            new static($config);
        }

        return self::$pdo;
    }
}