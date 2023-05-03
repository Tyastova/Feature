<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";

session_start();
?>

<div class="container">
    <div class="entry">
        <table class="entries">
            <tr>
                <th>Заявка</th>
                <th>Клиент</th>
                <th>Комментарий</th>
                <th>Дата</th>
                <th>Мастер</th>
                <th>Услуга</th>
                <th>Статус</th>
                <th class="size">Размер</th>
                <th>Стиль</th>
                <th>Тату</th>
            </tr>
            <?php foreach ($entries as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->nameKl ?> <?= $item->number ?></td>
                    <td><?= $item->comment ?></td>
                    <td><?= $item->data ?></td>
                    <td><?= $item->masterName ?></td>
                    <td><?= $item->serTit ?></td>
                    <form action="/app/admin/tables/admin.redacte.statys.php" class="status" method="POST">
                        <td><?= $item->stname ?> <p><button name="btn-redacte-status" value="<?= $item->id ?>">&#9998;</button></p>
                        </td>
                    </form>
                    <td><?= $item->size ?></td>
                    <td><?= $item->style ?></td>
                    
                    <form action="/app/admin/tables/admin.entriesPhoto.red.php" class="status" method="POST">
                        <td><img class="img_ent" src="/upload/<?= $item->photo ?>">
                            <input type="hidden" name="id" value="<?= $item->tattoo_id ?>">
                            <input type="hidden" name="entries_id" value="<?= $item->id ?>">
                            <p><button name="btn-redacte-photo" value="<?= $item ? $item->photo : null ?>">&#9998;</button></p>
                        </td>
                    </form>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>