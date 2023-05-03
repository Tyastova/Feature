<?php

use App\models\Record;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST["otprav"])) {

    if (isset($_FILES["userfile"])) {

        $name = $_FILES["userfile"]["name"];
        $tmpname = $_FILES["userfile"]["tmp_name"];
        $error = $_FILES["userfile"]["error"];
        $nameInServer = time() . "_" . preg_replace("/[\-&\d_#]/", "", $name);
        if (move_uploaded_file($tmpname, $_SERVER["DOCUMENT_ROOT"] . "/upload/" . $nameInServer)) {
            $_SESSION["message"] = "файл успешно загружен";
        } else {
            $_SESSION["errors"]["userfile"] = "Ошибка";
        }
    }
}
Record::record($_POST);

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/forma.view.php";
