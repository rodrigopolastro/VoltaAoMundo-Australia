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

    case 'import_comments':
        if (isset($_FILES['json_file']) && $_FILES['json_file']['error'] === UPLOAD_ERR_OK) {
            $file_temp_path = $_FILES['json_file']['tmp_name'];
            $file_name = $_FILES['json_file']['name'];
            $file_name_parts = explode(".", $file_name);
            $file_extension = strtolower(end($file_name_parts));

            if ($file_extension === 'json') {
                $file_content = file_get_contents($file_temp_path);
                $comments = json_decode($file_content, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    echo '<pre>';
                    print_r($comments);
                    echo '</pre>';
                    foreach ($comments as $comment) {
                        $formatted_comment = [
                            'page_id' => $_POST['page_id'],
                            'user_id' => $_POST['user_id'],
                            'content' => $comment['comentario'],
                            'is_approved' => FALSE,
                        ];

                        try {
                            createComment($formatted_comment);
                            $query_string = '?import_status=success';
                        } catch (PDOException $exception) {
                            $query_string = '?import_status=error';
                            echo $exception;
                        }
                        header(
                            'Location: /volta-ao-mundo-australia/views/pages/admin-page.php' .
                                $query_string
                        );
                    }
                } else {
                    echo "Error decoding JSON: " . json_last_error_msg();
                }
            } else {
                echo "Error: Only JSON files are allowed.";
            }
        } else {
            echo "Error: " . $_FILES['json_file']['error'];
        }
        break;

    default:
        $error_message = 'Invalid action informed: action = ' . $_POST['action'];
        return $error_message;
}
