<?php

use App\models\Style;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if(isset($_POST["save-product"])){
    $_SESSION["save-product"] = $_POST["save-product"];
}

$product = Style::find($_GET["id"]);
$styles = Style::find($_GET["id"]);

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.products.redacte.view.php"; ?>