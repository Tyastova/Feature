<?php

use App\models\Entry;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (!$_SESSION["admin"]) {
    header("location: /");
}

$tattoo = Entry::findPhoto($_POST['id']);

$entries_id = $_POST["entries_id"];

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.entriesPhoto.view.php";
