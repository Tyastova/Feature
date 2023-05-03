<?php session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/header.php";
?>

<div class="profile">
        <p class="log">Вы зашли как админ: <?= $adminProf->login ?></p>
</div>

<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/footer.php";
