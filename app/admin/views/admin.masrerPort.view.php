<?require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php"; ?>  

<div class="mastera">
  <h1>Наши мастера</h1>
  <div class="master">
    <?php foreach ($mastersAd as $master) : ?>
      <div class="masterr">
        <img src="/upload/<?= $master->photo ?>" alt="oneMaster" class="oneMaster" />
        <p class="textFI"><?= $master->name ?> <?= $master->surname ?></p>
        <p class="textM">Тату-Мастер</p>
      <div class="a"> <a class="link" href="/app/admin/tables/admin.showMaster.php?id=<?= $master->id ?>">Изменить</a></div> 
      <div class="a"> <a class="linkPhoto" href="/app/admin/tables/admin.portPhotoMasterShow.php?id=<?= $master->id ?>">Изменить портфолио</a></div> 
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php"  ?>