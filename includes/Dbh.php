<?php

class Dbh {
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root'; 
    private $database = 'canada_tour';

    protected function connect() {
        $dsn = "mysql:host=$host;dbname=$database";
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}