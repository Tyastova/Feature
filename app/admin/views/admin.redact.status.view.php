<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
session_start();
?>

<div class="products">
    <form action="/app/admin/tables/admin.entries.st.php" method="POST">
        <div class="ent"> <a class="nazad" href="/app/admin/tables//admin.entries.php">Вернуться назад</a></div>
        <select name="status" id="categories">
            <?php foreach ($statuses as $item) : ?>
                <option value="<?= $item->id ?>"><?= $item->name ?></option>
            <?php endforeach ?>
        </select>
        <input type="text" name="message">
        <p><button name="btn-create-status" value="<?= $entries_id ?>">Сохранить</button></p>
    </form>

</div>