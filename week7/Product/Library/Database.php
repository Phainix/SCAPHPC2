<?php

namespace Library;

class Database {

    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
    public $db = 'products';
    public $conn;
    public $stmt;
    public $result;

    public function connect() {
        $this->conn = new \mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            throw new \Exception("Oops! Connection Failed!");
        }
    }

    public function __desctruct() {
        $this->stmt->close();
        $this->conn->close();
    }

    public function prepare($sql) {
        $this->stmt = $this->conn->prepare($sql);
        if($this->stmt == false) {
            throw new \Exception($this->conn->error);
        }
    }

    public function excecute() {
        if($this->result == false) {
            throw new \Exception($this->stmt->error);
        }
        $this->result = $this->stmt->execute();
        if($this->result == false) {
            throw new \Exception($this->stmt->error);
        }
    }

}