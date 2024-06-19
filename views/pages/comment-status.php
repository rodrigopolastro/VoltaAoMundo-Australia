<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
require_once fullPath('views/components/header.php');
require_once fullPath('backend/pages_queries.php');

$current_page_id = getPageIdByName('statistics');
?>

<div class="container">
    <div class="mt-5 d-flex  justify-content-center align-items-center">
        <div class="w-50 bg-white p-5 rounded-4">
            <?php if ($_GET['comment_status'] == 'success') : ?>
                <div>
                    <h2 class="text-center">Obrigado pelo comentário!</h2>
                    <p class="text-center mt-3"> Assim que for aprovado por um administrador, ele será exibido no site!</p>
                </div>
            <?php elseif ($_GET['comment_status'] == 'error') :  ?>
                <div>
                    <h2 class="text-center">Ops, ocorreu algo de errado...</h2>
                    <p class="text-center mt-3">Houve um erro no envio do comentário, por favor tente novamente mais tarde</p>
                </div>
            <?php endif ?>
            <div class="d-flex justify-content-end pt-5">
                <a href="./home.php" class="btn btn-primary">Voltar para a Página Inicial</a>
            </div>
        </div>
    </div>
</div>