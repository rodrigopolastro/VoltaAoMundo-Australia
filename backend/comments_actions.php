<?php
require $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require fullPath('database/queries/comments_queries.php');

$action = $_POST['action'];
switch ($action) {
    case 'insert_comment':
        $comment = [
            'page_id' => $_POST['page_id'],
            'user_id' => 1,
            'content' => $_POST['comment_content'],
            'is_approved' => FALSE,

        ];

        createComment($comment);
        $destination = $_POST['page_name'] . '.php';
        header('Location: /volta-ao-mundo-australia/views/' . $destination);
        break;

    default:
        $error_message = 'Invalid action informed: action = ' . $action;
        return $error_message;
}
