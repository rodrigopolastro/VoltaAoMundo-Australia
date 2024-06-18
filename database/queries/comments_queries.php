<?php
require fullPath('/database/connection.php');

function getCommentsByPageName($page_name)
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
        INNER JOIN pages ON pages.page_id = comments.page_id
        WHERE page_name = :page_name
        AND is_approved = TRUE"
    );

    $statement->bindValue(':page_name', $page_name);
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
