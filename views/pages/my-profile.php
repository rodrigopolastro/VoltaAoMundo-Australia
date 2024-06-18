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
            <div class="bg-white p-4 rounded-3 mb-3">
                <p>Olá, 
                    <span class="fs-2"><?= $_SESSION['user_first_name'] ?> <?= $_SESSION['user_last_name'] ?></span>
                </p>

                <p>Conta Criada em <?= $_SESSION['user_created_at'] ?></p>
            </div>
            <div class="bg-white p-4 rounded-3">
                <p class="fs-3">Meus Comentários</p>
                <?php if ($user_comments) : ?>
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
                <?php else : ?>
                    <h6>Você ainda não possui comentários</h6>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>