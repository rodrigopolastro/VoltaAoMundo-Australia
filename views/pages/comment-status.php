<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('views/components/header.php');
require_once fullPath('backend/pages_queries.php');

$current_page_id = getPageIdByName('statistics');
?>

<div class="container">
    <?php if ($_GET['comment_status'] == 'success') : ?>
        <div>
            <h3>Obrigado pelo comentário!</h3>
            <p>Assim que for aprovado por um administrador, ele será exibido no site!</p>
        </div>
    <?php elseif ($_GET['comment_status'] == 'error') :  ?>
        <div>
            <h3>Ops, ocorreu algo de errado...</h3>
            <p>Houve um erro no envio do comentário, por favor tente novamente mais tarde</p>
        </div>
    <?php endif ?>
    <a href="./home.php">Voltar para a Página Inicial</a>
</div>