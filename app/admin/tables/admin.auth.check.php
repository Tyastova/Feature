<?php

use App\models\Admin;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

unset($_SESSION["error"]);

$_SESSION["login"] = $_POST["login"];
$_SESSION["password"] = $_POST["password"];

if (isset($_POST["btn"])) {
    $admin = Admin::getAdmin($_POST['login'], $_POST['password']);

    if ($admin == null) {
        $_SESSION["error"] = "Пароль не подходит";
        $_SESSION["auth"] = false;
        if (!Admin::findLogin($_POST['login'])) {
            $_SESSION["error"] = "Пользователь не найден";
        }
        header("Location: /app/admin/admin.php");
        die();
    } else { 
        $_SESSION["admin"] = true;
        $_SESSION["auth"] = true;
        $_SESSION["id"] = $admin->id;
        header("Location: /app/admin/tables/admin.profile.php");
    }
}
