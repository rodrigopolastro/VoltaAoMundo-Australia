<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
if ($_SESSION['user_type'] == 'user') {
    header('Location: /volta-ao-mundo-australia/views/pages/home.php');
}

require_once fullPath('backend/comments_queries.php');
require_once fullPath('backend/users_queries.php');
require_once fullPath('backend/pages_queries.php');
require_once fullPath('views/components/header.php');

$users = getAllUsers();
$pages = getAllPages();
$comments_number = countAllComments();
$users_number = countAllUsers();

$comments = getAllComments();
$approved_comments = [];
$not_approved_comments = [];
if ($comments) {
    foreach ($comments as $comment) {
        if ($comment['is_approved']) {
            array_push($approved_comments, $comment);
        } else {
            array_push($not_approved_comments, $comment);
        }
    }
}

?>

<div class="container min-vh-90 py-5">
    <div class="row">
        <div class="col-8 p-3">
            <div class="bg-white p-4 rounded-4 mb-5">
                <h1 class="text-warning mb-3">Comentários em Análise</h1>
                <?php if ($not_approved_comments) : ?>
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
                                    <td><?= $comment['page_display_name'] ?></td>
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
                <?php else : ?>
                    <p>Não há comentários em análise.</p>
                <?php endif ?>
            </div>
            <div class="bg-white p-4 rounded-4 mb-5">
                <h1 class="text-success mb-3">Comentários Aprovados</h1>
                <?php if ($approved_comments) : ?>
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
                                    <td><?= $comment['page_display_name'] ?></td>
                                    <td><?= $comment['content'] ?></td>
                                    <td>
                                        <form method="POST" action="../../backend/comments_actions.php">
                                            <input type="hidden" name="action" value="disapprove_comment">
                                            <input type="hidden" name="comment_id" value="<?= $comment['comment_id'] ?>">
                                            <input type="submit" value="Desaprovar" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>Não há comentários em Aprovados.</p>
                <?php endif ?>
            </div>
        </div>
        <div class="col-4 p-3">
            <div class="bg-white p-4 rounded-4">
                <div>
                    <h3 class="mb-3">Estatísticas</h3>
                    <p><?= $comments_number ?> Comentários</p>
                    <p><?= $users_number ?> Usuários Registrados</p>
                </div>
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#importCommentsModal" class="btn btn-primary mt-5">Importar Comentários</button>
                </div>
                <div class="modal modal-lg fade" id="importCommentsModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-3">Importar Comentários</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="p-3">
                                    <form method="POST" enctype="multipart/form-data" action="../../backend/comments_actions.php">
                                        <input type="hidden" name="action" value="import_comments">
                                        <div class="">
                                            <div class="mb-3">
                                                <label for="commentsFile" class="form-label">Arquivo de Importação</label>
                                                <input class="form-control" id="commentsFile" type="file" name="json_file" accept=".json" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="commentsUser" class="form-label">Usuário</label>
                                                <select required id="commentsUser" name="user_id" class="form-control">
                                                    <?php foreach ($users as $user) : ?>
                                                        <option value='<?= $user['user_id'] ?>'>
                                                            <?= $user['first_name'] ?> <?= $user['last_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="commentsPage" class="form-label">Usuário</label>
                                                <select required id="commentsPage" name="page_id" class="form-control">
                                                    <?php foreach ($pages as $page) : ?>
                                                        <option value='<?= $page['page_id'] ?>'>
                                                            <?= $page['page_display_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <input type="submit" value="Importar" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
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