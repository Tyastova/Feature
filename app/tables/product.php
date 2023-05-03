<?php

use App\models\Product;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$products = Product::lastFive();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/products/product.view.php';