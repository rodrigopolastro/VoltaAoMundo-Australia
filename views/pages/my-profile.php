<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
if ($_SESSION['user_type'] == 'admin') {
    header('Location: /volta-ao-mundo-australia/views/pages/admin-page.php');
}


require_once fullPath('views/components/header.php');
require_once fullPath('backend/comments_queries.php');

$user_comments_number = countCommentsByUserId($_SESSION['user_id']);
$user_comments = getCommentsByUserId($_SESSION['user_id']);
?>

<div class="container">
    <div class="d-flex justify-content-center py-3">
        <div class="w-50">
            <div class="mb-5">
                <p class="fs-3 text-center">Minha Conta</p>
                <div class="bg-white p-4 rounded-3 mb-3">
                    <p class="mb-5">Olá,
                        <span class="fs-2"><?= $_SESSION['user_first_name'] ?> <?= $_SESSION['user_last_name'] ?></span>
                    </p>
                    <div class="d-flex justify-content-between">
                        <p>Conta Criada em <?= $_SESSION['user_created_at'] ?></p>
                        <p><?= $user_comments_number ?> comentários realizados</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <p class="fs-3 text-center">Meus Comentários</p>
                <?php if ($user_comments) : ?>
                    <?php foreach ($user_comments as $comment) : ?>
                        <div class="py-2">
                            <div class="bg-white rounded-3 p-3">
                                <div class="d-flex justify-content-between">
                                    <p><?= $comment['created_at'] ?></p>
                                    <p class="fs-5 fw-bold">Pagina "<?= $comment['page_display_name'] ?>"</p>
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
                    <div class="d-flex justify-content-center align-items-center bg-white py-5 rounded-4">
                        <p class="fs-5">Você ainda não possui comentários</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once fullPath('views/components/footer.html');
?>