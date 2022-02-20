<?php

class Dbh
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $database = 'canada_tour';


    public function connect()
    {
            $dsn = "mysql:host=" . $this->host . ";database=" . $this->database;
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
    }
}