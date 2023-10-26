<?php

namespace App\Kernel\Database;

use PDO;

class Database implements DatabaseInterface
{
    private PDO $pdo;

    public function __construct()
    {
        $this->connect();
    }

    public function insert(string $table, array $data): int|false
    {
        // TODO: Implement insert() method.
    }

    private function connect()
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;port=3306;dbname=test;charset=utf8',
            'root',
            ''
        );
    }
}
