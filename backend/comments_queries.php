<?php
require_once fullPath('/database/connection.php');

function getCommentsByPageId($page_id)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            comments.user_id,
            comments.created_at,
            comments.content,
            users.first_name,
            users.last_name
        FROM comments
        INNER JOIN users ON users.user_id = comments.user_id
        WHERE page_id = :page_id
        AND is_approved = TRUE"
    );

    $statement->bindValue(':page_id', $page_id);
    $statement->execute();

    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}

function countCommentsByPageId($page_id)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            COUNT(*) AS comments_number
        FROM comments
        WHERE page_id = :page_id
        AND is_approved = TRUE"
    );

    $statement->bindValue(':page_id', $page_id);
    $statement->execute();

    $results = $statement->fetch();
    return $results['comments_number'];
}

