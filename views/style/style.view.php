<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";
?>

<h1>Стили в котором мы работаем</h1>

<div class="style">
    <?php foreach ($stylesTattoo as $style) : ?>
        <div class="div_style">
            <img src="/upload/<?= $style->photo ?>" class="foto_style" />
            <div class="style_p">
                <p class="title_style"><?= $style->title ?></p>
                <p class="description_style"><?= $style->description ?></p>
                <a href="/app/tables/styleOne.php?id=<?= $style->id ?>" class="btn_style">Все фото</a>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/footer.php"  ?>