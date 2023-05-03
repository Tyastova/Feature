<?php 

use App\models\Master;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$masters = Master::mastera();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/products/product.view.php';
