<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
session_start(); ?>

<div class="products">
    <a class="nazad" href="/app/admin/tables/admin.style.php">Вернуться назад</a>

    <div class="card_one" style="height: 16rem;">
        <form action="/app/admin/tables/admin.products.saveIz.php" method="POST" enctype="multipart/form-data">

            <div class="card-body">
                <label for="image">Картинка</label>
                <input type="file" size="40" name="image">

                <div class="img">
                    <img  src="/upload/<?= $product->photo ?>" alt="" id="img" class="imgload_master">
                    <div class="input_img"><input class="photo_red" type="text" name="oldImage" value="<?= $product->photo ?>"></div>
                </div>

                <p><?= $_SESSION["error"] ?? "" ?></p>


                <div class="input_style_on">
                    <label class="label_name" for="name">Описание стиля</label>
                    <textarea class="name_red" size="40" cols="30" rows="3" name="description" value=""><?= $styles->description ?></textarea>
                </div>
                
                <button class="btn_save_red" name="save-product" value="<?= $styles->id ?>">Сохранить</button>
            </div>
        </form>
    </div>
</div>