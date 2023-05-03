<?php session_start()  ?>

<form class="createF" action="/app/admin/tables/admin.reg.php" method="POST">
    <p>Регистрация</p>
    <label for="login">
        Введите логин:
        <input type="login" class="form-control" name="login">
    </label>
    <label for="password" class="form-label">Пароль:
        <input type="password" name="password" class="form-control" id="password">
    </label>

    <?php if (!empty($_SESSION["error"])) : ?>
        <p class="error"><?= $_SESSION["error"] ?></p>
    <?php endif ?>

    <div class="form-group">
        <button class="button" name="btnReg">Зарегестрироваться</button>
    </div>
</form>

<? require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/templates/footer.php";