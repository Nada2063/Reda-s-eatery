<?php
// app/models/Database.php

class Database {
    private $host = 'your_database_host';
    private $username = 'your_database_username';
    private $password = 'your_database_password';
    private $database = 'your_database_name';
    private $conn;

    // Constructor to establish the database connection
    public function __construct() {
        $this->conn = $this->connect();
    }

    // Method to establish a database connection
    private function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    // Method to execute a SQL query
    public function query($sql) {
        $result = $this->conn->query($sql);

        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }

        return $result;
    }

    // Method to fetch a single row from the result set
    public function fetch($result) {
        return $result->fetch_assoc();
    }

    // Method to fetch all rows from the result set
    public function fetchAll($result) {
        $rows = [];

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    // Method to escape special characters in a string for use in a SQL statement
    public function escapeString($value) {
        return $this->conn->real_escape_string($value);
    }

    // Method to get the last inserted ID
    public function getLastInsertId() {
        return $this->conn->insert_id;
    }

    // Close the database connection
    public function close() {
        $this->conn->close();
    }
}
?>
