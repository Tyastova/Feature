<?php

use App\models\Master;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if(isset($_POST["save-masters-por"])){
    $_SESSION["save-masters-por"] = $_POST["save-masters-por"];
}

if(isset($_GET["id"])){
    $_SESSION["master"] = $_GET["id"];
}
$mastersPortadmin = Master::find($_SESSION["master"]);
$masters = Master::masterShow($_SESSION["master"]);


require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.portPhotoMasterShow.view.php";

?>