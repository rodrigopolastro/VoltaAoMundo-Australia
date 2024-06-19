<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/comments_queries.php');
$comments_number = countCommentsByPageId($current_page_id);
$comments = getCommentsByPageId($current_page_id);
?>

<div class="container my-5">
    <div class="d-flex justify-content-center">
        <div class="w-50">
            <p class="ps-3 fs-2 fw-bold">
                <?= $comments_number ?>
                <?= $comments_number == 1 ? 'Comentário': 'Comentários'?>
            </p>
            <div class="py-2">
                <div class="bg-white rounded-3 p-3">
                    <form method="POST" action="../../backend/comments_actions.php">
                        <div class="form-floating">
                            <input type="hidden" name="action" value="insert_comment">
                            <input type="hidden" name="page_id" value="<?= $current_page_id ?>">
                            <textarea required id="txtAreaComment" name="comment_content" class="form-control mb-3" style="height: 100px"></textarea>
                            <label for="txtAreaComment">Deixe um Comentário</label>
                            <input type="submit" value="Comentar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                <?php foreach ($comments as $comment) : ?>
                    <div class="py-2">
                        <div class="bg-white rounded-3 p-3">
                            <div class="d-flex justify-content-between">
                                <p class="fs-5 fw-bold"><?= $comment['first_name'] ?> <?= $comment['last_name'] ?></p>
                                <p><?= $comment['created_at'] ?></p>
                            </div>
                            <p><?= $comment['content'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>