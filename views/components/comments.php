<?php
require $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require fullPath('database/queries/comments_queries.php');
$comments_number = countCommentsByPageName(CURRENT_PAGE_NAME);
$comments = getCommentsByPageName(CURRENT_PAGE_NAME);
?>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="w-50">
            <p class="ps-3 fs-2 fw-bold"><?php print_r($comments_number) ?> Comentários</p>
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