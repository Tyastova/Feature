<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
session_start();

?>

<div class="products">
    <div class="a_nazad"><a class="nazad" href="/app/admin/tables/admin.masterPort.php">Вернуться назад</a></div>
    <form action="/app/admin/tables/admin.master.save.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?= $masters->photo ?>" name="oldImage">
        <div class="div-center">
            <img src="/upload/<?= $masters->photo ?>" class="card-img-top" alt="<?= $masters->photo ?>"><br>
            <div class="input"><input class="photo_port_red" type="file" name="image"></div>

            <div class="card" style="width: 48rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $masters->name ?> <?= $masters->surname ?> </h5>
                    <input type="text" name="name" value="<?= $masters->name ?>">
                    <input type="text" name="surname" value="<?= $masters->surname ?>">
                </div>
            </div>
        </div>

        <button class="save-masters" name="save-masters" value="<?= $masters->id ?>">Сохранить</button>
    </form>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php"  ?>