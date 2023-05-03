<?php 

use App\models\Review;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$reviews = Review::reviews();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/products/product.view.php';