<?php
require $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require fullPath('database/queries/comments_queries.php');
$comments = getCommentsByPageName(CURRENT_PAGE_NAME);
?>

<div class="container">
    <h1>Comentários</h1>
    <?php foreach ($comments as $comment) : ?>
        <h4><?= $comment['content'] ?></h4>
    <?php endforeach ?>
</div>