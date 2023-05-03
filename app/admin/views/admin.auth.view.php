<?php session_start()  ?>

    <br>
    <form class="createF" action="/app/admin/tables/admin.auth.check.php" method="POST">
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
            <button class="button" name="btn">Войти</button>
        </div>
    </form>
