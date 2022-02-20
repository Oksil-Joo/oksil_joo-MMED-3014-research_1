<?php

$host = 'localhost'; //the IP address where the mysql server is running
$user = 'root'; //username to connect to the mysql server
$password = 'root'; //password to connect to the mysql server
$database = 'canada_tour'; // database name that we want to access on the server
//$charset = 'utf8mp4;'; //the cgaracter set if tge database

$dsn = "mysql:host=$host;dbname=$database";


$pdo = new PDO($dsn, $user, $password);//PDO is the class provided by PHP we are using to connect to our database.
// var_dump($pdo);

$users = $pdo->query("SELECT * FROM `attrations`");

while ($row = $users->fetch()) {

    echo $row['name'];
}

$provincesQuery = $pdo->query("SELECT * FROM`provinces`");
$provincesResults = $provincesQuery->fetchAll(PDO::FETCH_ASSOC);

var_dump($provincesResults);

$provincesPreparedQuery = $pdo->prepare("SELECT * FROM `provinces` WHERE `name` = :name");
$provincesPreparedQuery->execute([
    'name' => 'Ontario'
]);

$provinces = $provincesPreparedQuery->fetchAll(PDO::FETCH_ASSOC);

var_dump($provinces);

$britishColumbiaQuery = $pdo->prepare("SELECT * FROM `provinces` where `name` = :name");
$britishColumbiaQuery->execute([
    'name' => 'British Columbia'
]);

$bc = $britishColumbiaQuery->fetchAll(PDO::FETCH_ASSOC);

var_dump($bc);

// $newUser = $pdo->prepare(
//     "INSERT INTO `users` ()"
// )