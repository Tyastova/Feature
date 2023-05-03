<?php

use App\models\Master;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (isset($_POST["save-masters-por"])) {

    if (isset($_FILES["image"])) {

        $name = $_FILES["image"]["name"];
        $tmpname = $_FILES["image"]["tmp_name"];
        $error = $_FILES["image"]["error"];

        $nameInServer = time() . "_" . preg_replace("/[\-&\d_#]/", "", $name);
        if (move_uploaded_file($tmpname, $_SERVER["DOCUMENT_ROOT"] . "/upload/" . $nameInServer)) {
            $_SESSION["message"] = "файл успешно загружен";
        } else {
            $_SESSION["errors"]["image"] = "Ошибка";
        }
    }
}
if (!isset($_SESSION["errors"])) {
    Master::addPhotoPort($nameInServer, $_SESSION["master"]);
    header('Location: /app/admin/tables/admin.portPhotoMasterShow.php');
}else{
    var_dump("lol");
}

