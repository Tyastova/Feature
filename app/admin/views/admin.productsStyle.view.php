<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
?>

<div class="products">
    <a class="nazad" href="/app/admin/tables/admin.style.php">Вернуться назад</a>
    <h1>Товары в стилях: <?= $style->title ?></h1>
    
    <table class="table">
        <tbody>
            <?php foreach ($tattoos as $item) : ?>
                <tr>
                <img class="foto_one" src="/upload/<?= $item->photoOne ?>" />
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/footer.php";