<?php

namespace App\Core\Database;

/**
 * Class Connection
 * $pdo = new PDO("mysql:host=127.0.0.1;dbname=myFramework", "root", "123456");
 */
class Connection
{
    /**
     * @param array $config
     * @return \PDO
     */
    public static function make(array $config): \PDO
    {
        try {
            return new \PDO(
                $config['connection'] . "dbname=" . $config['database'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\PDOException $e) {
            die("Could not connect to database");
        }
    }
}