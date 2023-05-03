<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
session_start();
?>

<a class="nazad" href="/app/admin/tables/admin.masterPort.php">Вернуться назад</a>

<div class="show_master">
    <form class="port" action="/app/admin/tables/admin.portPotoMaster.save.php" method="POST" enctype="multipart/form-data">
        <div class="input_img_port"><input class="photo_port_red" type="file" name="image"></div>
        <button class="save-masters" name="save-masters-por" value="<?= $masters->id ?>" >Сохранить</button>
    </form>

    <div class="photo_show">
        <?php foreach ($mastersPortadmin as $item) : ?>

            <div class="img_port">
                <img src="/upload/<?= $item->photo ?>" alt="" id="img" class="imgload">
            </div>

            <form method="POST" action="/app/admin/tables/admin.masterPort.delete.php" class="del_form">
                <button class="del" name="del-btn-master-photo" value="<?= $item->id ?>"> &#128465;</button>
            </form>
        <?php endforeach ?>
    </div>
</div>