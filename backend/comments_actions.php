<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/comments_queries.php');

switch ($_POST['action']) {
    case 'insert_comment':
        $comment = [
            'page_id' => $_POST['page_id'],
            'user_id' => 1,
            'content' => $_POST['comment_content'],
            'is_approved' => FALSE,
        ];

        try {
            createComment($comment);
            $query_string = '?comment_status=success';
        } catch (PDOException $exception) {
            $query_string = '?comment_status=error';
        }
        header(
            'Location: /volta-ao-mundo-australia/views/pages/comment_status.php' . 
            $query_string
        );
        break;

    default:
        $error_message = 'Invalid action informed: action = ' . $_POST['action'];
        return $error_message;
}
