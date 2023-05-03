<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";  ?>

<div class="mastera">
  <h1>Наши мастера</h1>
  <div class="master">
    <?php foreach ($masters as $master) : ?>
      <div class="masterr">
        <img src="/upload/<?= $master->photo ?>" alt="oneMaster" class="oneMaster" />
        <p class="textFI"><?= $master->name ?> <?= $master->surname ?></p>
        <p class="textM">Тату-Мастер</p>
        <a class="link" href="/app/tables/show_master.php?id=<?= $master->id ?>">Смотреть</a>
      </div>
    <?php endforeach ?>
  </div>
</div>

<div class="cal">
  <div class="foto_portfolio">
    <h1>Общая галерея работ</h1>
    <?php foreach ($portfolios as $portfoto) : ?>
      <img src="/upload/<?= $portfoto->photo ?>" class="foto_port" />
    <?php endforeach ?>
  </div>
</div>

