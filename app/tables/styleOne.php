<?php 

use App\models\Style;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$styleOneFoto = Style::stylesOne($_GET['id']);

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/style/styleFoto.view.php';