<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
session_start();
?>

<div class="photo">
    <form action="/app/admin/tables/admin.entriesPhotoIz.php" method="POST" enctype="multipart/form-data">
        <div class="ent"> <a class="nazad" href="/app/admin/tables/admin.entries.php">Вернуться назад</a></div>

        <input type="hidden" name="tattoo_id" value="<?= $tattoo ? $tattoo->id : null ?>">

        <label for="image">Картинка</label>
        <input type="file" size="40" name="image">

        <div class="img">
            <img src="/upload/<?= $tattoo ? $tattoo->photo : "nophoto.jpg" ?>" id="img" class="imgload_photo">
            <div class="input_img">
                <input class="photo_red" type="text" name="oldImage" value="<?= $tattoo ? $tattoo->photo : "no!!!" ?>">
            </div>
        </div>

        <p><?= $_SESSION["error"] ?? "" ?></p>
        <p><button name="btn-create-photo" value="<?= $entries_id ?>">Сохранить</button></p>
    </form>

</div>