<?php

use App\models\Entry;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (!$_SESSION["admin"]) {
    header("location: /");
}

$statuses = Entry::allStatus();

if (isset($_POST["btn-redacte-status"])) {
    $_SESSION["btn-redacte-status"] = $_POST["btn-redacte-status"];
}

$entries_id = $_SESSION["btn-redacte-status"];

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.redact.status.view.php";
