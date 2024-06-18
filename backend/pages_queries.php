<?php
require_once fullPath('/database/connection.php');

function getAllPages()
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            page_id,
            page_name
        FROM pages"
    );

    $statement->execute();

    $pages = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $pages;
}

function getPageIdByName($page_name)
{
    global $connection;
    $statement = $connection->prepare(
        "SELECT 
            page_id
        FROM pages
        WHERE page_name = :page_name"
    );

    $statement->bindValue(':page_name', $page_name);
    $statement->execute();

    $result = $statement->fetch();
    return $result['page_id'];
}