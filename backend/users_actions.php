<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/users_queries.php');

define('DEFAULT_USER_TYPE_ID', '2');

if (!isset($_SESSION)) {
    session_start();
}
switch ($_POST['action']) {
    case 'sign_up':
        $existing_user = getUserByEmail($_POST['email']);
        if ($existing_user) {
            $query_string = '?sign_up_status=already_registered';
            header('Location: /volta-ao-mundo-australia/views/pages/sign-up.php' . $query_string);
            exit();
        } else {
            $user = [
                'user_email'    => $_POST['email'],
                'user_type_id'  => DEFAULT_USER_TYPE_ID,
                'user_password' => hash('sha256', $_POST['password']),
                'first_name'    => $_POST['first_name'],
                'last_name'     => $_POST['last_name'],
            ];

            $user_id = createUser($user);

            $_SESSION['user_id']         = $user_id;
            $_SESSION['user_type']       = 'user';
            $_SESSION['user_first_name'] = $user['first_name'];
            $_SESSION['user_last_name']  = $user['last_name'];
            $created_at = new DateTimeImmutable();
            $_SESSION['user_created_at']  = $created_at->format('d/m/Y');
            // var_dump($created_at); 

            // header("Location: /volta-ao-mundo-australia/views/pages/home.php");
            // exit();

            break;
        }

    case 'login':
        $user = getUserByEmail($_POST['email']);
        if ($user && $user['user_password'] == hash('sha256', trim($_POST['password']))) {
            $_SESSION['user_id']         = $user['user_id'];
            $_SESSION['user_type']       = $user['user_type'];
            $_SESSION['user_first_name'] = $user['first_name'];
            $_SESSION['user_last_name']  = $user['last_name'];
            $created_at = new DateTimeImmutable(
                $user['created_at'],
                new DateTimeZone('America/Sao_Paulo')
            );
            // var_dump($created_at);
            $_SESSION['user_created_at'] = $created_at->format('d/m/Y');

            if ($user['user_type'] == 'admin') {
                // admin page
                // exit();
            } elseif ($user['user_type'] == 'user') {
                header('Location: /volta-ao-mundo-australia/views/pages/home.php');
                exit();
            }
        } else {
            $query_string = '?login_status=incorrect_info';
            header('Location: /volta-ao-mundo-australia/views/pages/login.php' . $query_string);
        }
        break;

    case 'logout':
        session_unset();
        session_destroy();
        header('Location: /volta-ao-mundo-australia/views/pages/login.php');
        exit();
        break;

    default:
        $error_message = 'Invalid action informed: action = ' . $_POST['action'];
        return $error_message;
}
