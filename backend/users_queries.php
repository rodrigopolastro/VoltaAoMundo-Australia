<?php
require_once fullPath('/database/connection.php');

function getAllUsers()
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            user_types.type_name user_type,
            users.user_id,
            users.user_email,
            users.user_password,
            users.first_name,
            users.last_name,
            users.created_at
        FROM users
        INNER JOIN user_types ON user_types.user_type_id = users.user_type_id
        WHERE user_types.type_name = 'user'"
    );

    $statement->execute();

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function getUserByEmail($user_email)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            user_types.type_name user_type,
            users.user_id,
            users.user_email,
            users.user_password,
            users.first_name,
            users.last_name,
            users.created_at
       FROM users
       INNER JOIN user_types ON user_types.user_type_id = users.user_type_id
       WHERE user_email = :user_email"
    );

    $statement->bindValue(':user_email', $user_email);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function countAllUsers()
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            COUNT(*) AS users_number
        FROM users
        INNER JOIN user_types ON user_types.user_type_id = users.user_type_id
        WHERE user_types.type_name = 'user'"
    );

    $statement->execute();

    $results = $statement->fetch();
    return $results['users_number'];
}

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
