<?php

use App\models\Master;

use App\models\Product;

use App\models\Portfolio;

use App\models\Style;

use App\models\Price;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$masters = Master::mastera();
$products = Product::lastFive();
$portfolios = Portfolio::port();
$stylesTattoo = Style::styles();
$sizes = Price::sizes();
$priceServices = Price::price();

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/products/product.view.php";