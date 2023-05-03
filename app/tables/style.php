<?php 

use App\models\Style;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$stylesTattoo = Style::styles();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/style/style.view.php';