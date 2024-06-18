<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
if ($_SESSION['user_type'] == 'admin') {
    header('Location: /volta-ao-mundo-australia/views/pages/admin-page.php');
}


require_once fullPath('views/components/header.php');
require_once fullPath('backend/comments_queries.php');

$user_comments = getCommentsByUserId($_SESSION['user_id']);
?>

<div class="container">
    <div class="d-flex justify-content-center py-3">
        <div class="w-50">
            <h1>Meus Comentários</h1>
            <div class="">
                <?php foreach ($user_comments as $comment) : ?>
                    <div class="py-2">
                        <div class="bg-white rounded-3 p-3">
                            <div class="d-flex justify-content-between">
                                <p><?= $comment['created_at'] ?></p>
                                <p class="fs-5 fw-bold">Comentário em <?= $comment['page_name'] ?></p>
                            </div>
                            <p><?= $comment['content'] ?></p>
                            <?php if ($comment['is_approved']) : ?>
                                <p>Comentário Aprovado</p>
                            <?php else : ?>
                                <p>Comentário Aguardando Aprovação</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>