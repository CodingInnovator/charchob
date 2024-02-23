<?php

namespace App;

interface DatabaseInterface
{
    public function connect();
}

class Database implements DatabaseInterface
{
    private $host;
    private $port;
    private $database;
    private $username;
    private $password;

    public function __construct(string $host, string $port, string $database, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $conn = new \PDO("mysql:host={$this->host};port={$this->port};dbname={$this->database}", $this->username, $this->password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//          $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
//          $stmt->bindParam(':email', 'alirezatahriri4@gmail.com');
//          $stmt->execute();
        } catch (\PDOException $e) {
            echo "Error: (database.php) " . $e->getMessage();
        }
    }
}
