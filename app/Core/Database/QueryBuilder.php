<?php

namespace App\Core\Database;

class QueryBuilder
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $query = $this->pdo->prepare("select * from {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, array $paramerts)
    {
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(', ', array_keys($paramerts)),
            ":" . implode(', :', array_keys($paramerts))
        );

        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($paramerts);
        } catch (Exception $e) {
            die("Wooops, sorry this is some thing wrong");
        }
    }

    public function deleteById(string $table, string $identity, string $value)
    {
        $sql = sprintf('DELETE FROM %s WHERE %s = %d', $table, $identity, $value);

        $query = $this->pdo->prepare($sql);

        $query->execute();
    }
}