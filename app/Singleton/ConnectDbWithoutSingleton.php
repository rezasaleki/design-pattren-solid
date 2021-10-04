<?php

namespace App\Singleton;

use PDO;

class ConnectDbWithoutSingleton
{
    private $conn;
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '1qaz!QAZ';
    private $dbname = 'test';

    function __construct()
    {
        $this->conn = new PDO(
            "mysql:host={$this->host}; dbname={$this->dbname}",
            $this->username,
            $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
        );
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
