<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/comments_queries.php');

if (!isset($_SESSION)) {
    session_start();
}
switch ($_POST['action']) {
    case 'insert_comment':
        $comment = [
            'page_id' => $_POST['page_id'],
            'user_id' => $_SESSION['user_id'],
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
            'Location: /volta-ao-mundo-australia/views/pages/comment-status.php' .
                $query_string
        );
        exit();
        break;

    case 'approve_comment':
        approveComment($_POST['comment_id']);
        header(
            'Location: /volta-ao-mundo-australia/views/pages/admin-page.php'
        );
        exit();
        break;

    case 'disapprove_comment':
        disapproveComment($_POST['comment_id']);
        header(
            'Location: /volta-ao-mundo-australia/views/pages/admin-page.php'
        );
        exit();
        break;

    default:
        $error_message = 'Invalid action informed: action = ' . $_POST['action'];
        return $error_message;
}
