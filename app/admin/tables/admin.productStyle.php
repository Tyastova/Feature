<?php

use App\models\Style;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (!$_SESSION["admin"]) {
    header("location: /");
}

$style = Style::find($_GET['id']);
$tattoos = Style::getAllproductsByStyle($_GET["id"]);

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.productsStyle.view.php";