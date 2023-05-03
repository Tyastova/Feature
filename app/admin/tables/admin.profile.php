<?php

use App\models\Admin;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$adminProf = Admin::find($_SESSION['id']);

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/admin/views/admin.profile.view.php';