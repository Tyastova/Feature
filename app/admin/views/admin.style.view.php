<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";

?>

<div class="Admin-container">
    <h1 class="sty">Стили</h1>
    <form class="style_form" action="/app/admin/tables/admin.style.save.php" method="POST">
        <div class="label">
            <label for="name" class="name">
                Введите название:
                <input type="text" class="form-control" name="title">
            </label>
        </div>

        <div class="textarea">
            <label for="name" class="name">
                Введите описание:
                <textarea type="text" class="form-controll" name="description"></textarea>
            </label>
        </div>

        <div class="input">
            <label for="name" class="name">
                Добавте фото:</label>
            <input type="file" class="form-control" name="oldImage"></input>

        </div>

        <div class="form-group">
            <button class="button" name="InsertBtn">Добавить</button>
        </div>
    </form>
</div>

<table cellspacing="0">
    <?php foreach ($adminStyle as $item) : ?>
        <tr>
            <td class="list-group-item style-position"><?= $item->title ?></td>
            <td>
                <li><a class="btn btn-primary" href="/app/admin/tables/admin.productStyle.php?id=<?= $item->id ?>">Товары</a></li>
            </td>
            <td>
                <li><a class="btn btn-primary" href="/app/admin/tables/admin.products.redacte.php?id=<?= $item->id ?>">Изменить</a></li>
            </td>

            <td>
                <form action="/app/admin/tables/admin.styel.delete.php" method="POST">
                    <button class="del-btn" name="del-btn" value="<?= $item->id ?>"> &#128465;</button>
                </form>
            </td>

        </tr>
    <?php endforeach ?>
</table>
</div>

<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/footer.php";
