<?php
require_once fullPath('/database/connection.php');

function createUser($user)
{
    var_dump($user);
    global $connection;
    $statement = $connection->prepare(
        "INSERT INTO users (
            user_type_id,
            user_email, 
            user_password, 
            first_name, 
            last_name
        ) VALUES (
            :user_type_id,
            :user_email, 
            :user_password, 
            :first_name, 
            :last_name
        )"
    );

    $statement->bindValue(':user_type_id', $user['user_type_id']);
    $statement->bindValue(':user_email', $user['user_email']);
    $statement->bindValue(':user_password', $user['user_password']);
    $statement->bindValue(':first_name', $user['first_name']);
    $statement->bindValue(':last_name', $user['last_name']);
    $statement->execute();

    return $connection->lastInsertId();
}
