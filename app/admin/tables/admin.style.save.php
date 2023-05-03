<?php

use App\models\Style;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if (!$_SESSION["admin"]) {
    header("location: /");
}
unset($_SESSION["error"]);

$extensions = ['jpeg', 'jpg', 'png', 'webp', 'jfif'];
$types = ["image/jpg", "image/png", "image/jpeg", "image/webp", "image/jfif"];

if (isset($_POST["InsertBtn"])) {
    $name = $_POST["oldImage"];

    if (isset($_FILES["image"]) && $_FILES["image"]["name"] != "") {


        $size = $_FILES["image"]["size"];
        $newName = $_FILES["image"]["name"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $error = $_FILES["image"]["error"];

        $path_parts = pathinfo("name");

        $newName = time() . "_" . $newName;
        echo ("<br>");
        var_dump($_FILES);
        echo ("<br>");

        if (in_array(mime_content_type($tmpName), $types)) {

            if ($size > 4097152) {
                $_SESSION["error"] = "Файл слишком большой";
            }
            if (!move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"] . "/upload/$newName",)) {
                $_SESSION["error"] = "Не удалось переместить файл";
            } else {
                unlink($_SERVER["DOCUMENT_ROOT"] . "/upload/$name");
                $name = $newName;
            }
        } else {
            $_SESSION["error"] = "Неправильное расширение файла. Выберите файлы с расширением: " . implode(", ", $extensions);
        }
    }

    if (!isset($_SESSION["error"])) {

        Style::addProduct($_POST['title'], $name, $_POST["description"]);

        header("location: /app/admin/tables/admin.style.php");
    } else {
        header("location: /app/admin/tables/admin.style.php");
    }
}

//require_once $_SERVER["DOCUMENT_ROOT"]."/app/admin/tables/admin.product.php";
