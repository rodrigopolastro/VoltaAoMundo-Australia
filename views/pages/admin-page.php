<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
if ($_SESSION['user_type'] == 'user') {
    header('Location: /volta-ao-mundo-australia/views/pages/home.php');
}

require_once fullPath('backend/comments_queries.php');
require_once '../components/header.html';

$comments = getAllComments();

if ($comments) {
    $approved_comments = [];
    $not_approved_comments = [];
    foreach ($comments as $comment) {
        if ($comment['is_approved']) {
            array_push($approved_comments, $comment);
        } else {
            array_push($not_approved_comments, $comment);
        }
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div>
                <h1>Comentários em Análise</h1>
                <table class="table table-striped">
                    <thead>
                        <th>Data</th>
                        <th>Usuário</th>
                        <th>Página</th>
                        <th>Comentário</th>
                        <th>Aprovar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($not_approved_comments as $comment) : ?>
                            <tr>
                                <td><?= $comment['created_at'] ?></td>
                                <td><?= $comment['user_first_name'] ?> <?= $comment['user_last_name'] ?></td>
                                <td><?= $comment['page_name'] ?></td>
                                <td><?= $comment['content'] ?></td>
                                <td>
                                    <form method="POST" action="../../backend/comments_actions.php">
                                        <input type="hidden" name="action" value="approve_comment">
                                        <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                        <input type="submit" value="Aprovar" class="btn btn-success">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div>
                <h1>Comentários em Análise</h1>
                <table class="table table-striped">
                    <thead>
                        <th>Data</th>
                        <th>Usuário</th>
                        <th>Página</th>
                        <th>Comentário</th>
                        <th>Desaprovar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($approved_comments as $comment) : ?>
                            <tr>
                                <td><?= $comment['created_at'] ?></td>
                                <td><?= $comment['user_first_name'] ?> <?= $comment['user_last_name'] ?></td>
                                <td><?= $comment['page_name'] ?></td>
                                <td><?= $comment['content'] ?></td>
                                <td>
                                    <form method="POST" action="../../backend/comments_actions.php">
                                        <input type="hidden" name="action" value="disapprove_comment">
                                        <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                        <input type="submit" value="Aprovar" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h3>Estatísticas</h3>

        </div>
    </div>
</div>