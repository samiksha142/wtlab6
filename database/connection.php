<?php

class Connection {

    private $host;
    private $dbname;
    private $username;
    private $password;

    public $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'test';
        $this->username = 'root';
    }

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new \PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username );
        } catch(\PDOException $exp) {
            echo "Connection Error: " . $exp->getMessage();
        }

        return $this->conn;
    }
}
?>