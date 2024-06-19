<?php
require_once fullPath('/database/connection.php');

function getAllComments()
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            comments.comment_id,
            comments.user_id,
            comments.created_at,
            comments.content,
            comments.is_approved,
            pages.page_display_name,
            users.first_name user_first_name,
            users.last_name user_last_name
        FROM comments
        INNER JOIN users ON users.user_id = comments.user_id
        INNER JOIN pages ON pages.page_id = comments.page_id
        ORDER BY comments.created_at DESC"
    );

    $statement->execute();

    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}

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
        AND is_approved = TRUE
        ORDER BY comments.created_at DESC"
    );

    $statement->bindValue(':page_id', $page_id);
    $statement->execute();

    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}

function getCommentsByUserId($user_id)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
        comments.comment_id,
        comments.user_id,
        comments.created_at,
        comments.content,
        comments.is_approved,
        pages.page_display_name
    FROM comments
    INNER JOIN users ON users.user_id = comments.user_id
    INNER JOIN pages ON pages.page_id = comments.page_id
    WHERE comments.user_id = :user_id
    ORDER BY comments.created_at DESC"
    );

    $statement->bindValue(':user_id', $user_id);
    $statement->execute();

    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}

function countAllComments()
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            COUNT(*) AS comments_number
        FROM comments"
    );

    $statement->execute();

    $results = $statement->fetch();
    return $results['comments_number'];
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

function countCommentsByUserId($user_id)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            COUNT(*) AS comments_number
        FROM comments
        WHERE user_id = :user_id
        AND is_approved = TRUE"
    );

    $statement->bindValue(':user_id', $user_id);
    $statement->execute();

    $results = $statement->fetch();
    return $results['comments_number'];
}

function createComment($comment)
{
    global $connection;
    $statement = $connection->prepare(
        "INSERT INTO comments (
            user_id, 
            page_id, 
            content,
            is_approved
        ) VALUES (
            :user_id, 
            :page_id, 
            :content,
            :is_approved
        )"
    );

    $statement->bindValue(':user_id', $comment['user_id']);
    $statement->bindValue(':page_id', $comment['page_id']);
    $statement->bindValue(':content', $comment['content']);
    $statement->bindValue(':is_approved', $comment['is_approved']);
    $statement->execute();
}

function approveComment($comment_id)
{
    global $connection;
    $statement = $connection->prepare(
        "UPDATE comments
        SET is_approved = TRUE
        WHERE comment_id = :comment_id"
    );

    $statement->bindValue(':comment_id', $comment_id);
    $statement->execute();
}

function disapproveComment($comment_id)
{
    global $connection;
    $statement = $connection->prepare(
        "UPDATE comments
        SET is_approved = FALSE
        WHERE comment_id = :comment_id"
    );

    $statement->bindValue(':comment_id', $comment_id);
    $statement->execute();
}
