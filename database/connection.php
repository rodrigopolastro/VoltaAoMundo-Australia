<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "volta_ao_mundo";

try {
    $connection = new PDO(
        "mysql:host=$server;dbname=$database",
        $user,
        $password
    );
} catch (PDOException $exception) {
    throw new PDOException($exception->getMessage(), (int) $exception->getCode());
}
