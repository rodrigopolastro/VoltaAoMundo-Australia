<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
if ($_SESSION['user_type'] == 'user') {
    header('Location: /volta-ao-mundo-australia/views/pages/home.php');
}

require_once fullPath('backend/comments_queries.php');
require_once fullPath('backend/users_queries.php');
require_once fullPath('backend/pages_queries.php');
require_once fullPath('views/components/header.html');

$users = getAllUsers();
$pages = getAllPages();

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

<div class="container min-vh-90">
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
            <div>
                <h3>Estatísticas</h3>
            </div>
            <button data-bs-toggle="modal" data-bs-target="#importCommentsModal" class="btn btn-primary">Importar Comentários</button>
            <div class="modal modal-lg fade" id="importCommentsModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3">Brisbane</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" action="../../backend/comments_actions.php">
                                <input type="hidden" name="action" value="import_comments">
                                <div class="">
                                    <label for="commentsFile" class="form-label">Arquivo de Importação</label>
                                    <input class="form-control" id="commentsFile" type="file" name="json_file" accept=".json" required>
                                    <select required id="" name="user_id" class="form-control">
                                        <?php foreach ($users as $user) : ?>
                                            <option value='<?= $user['user_id'] ?>'>
                                                <?= $user['first_name'] ?> <?= $user['last_name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <select required id="" name="page_id" class="form-control">
                                        <?php foreach ($pages as $page) : ?>
                                            <option value='<?= $page['page_id'] ?>'>
                                                <?= $page['page_name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <input type="submit" value="Importar" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require_once '../components/footer.html';
?>