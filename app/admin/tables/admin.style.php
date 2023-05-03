<?php

use App\models\Style;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$adminStyle = Style::styles();

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/admin/views/admin.style.view.php';
