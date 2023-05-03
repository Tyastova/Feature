<?php

use App\models\Entry;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (isset($_POST["btn-create-status"])) {
    if ($_POST["status"] == 4) {
        if (preg_match("/^(?=.{10,})(?=(.*[^а-яёА-ЯЁ])).*$/u", $_POST["message"])) {
            Entry::redacteStatus($_POST["btn-create-status"], $_POST["status"], $_POST["message"]);
            header("location: /app/admin/tables/admin.entries.php");
        } else {
            $_SESSION["error"] = "Ошибка";
            header("location: /app/admin/tables/admin.entries.php");
        }
    } else {
        Entry::redacteStatus($_POST["btn-create-status"], $_POST["status"], $_POST["message"]);
        header("location: /app/admin/tables/admin.entries.php");
    }
}
