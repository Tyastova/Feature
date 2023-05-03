<?php

use App\models\Style;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$delete = Style::deleteStyle($_POST['del-btn']);

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/tables/admin.style.php";
