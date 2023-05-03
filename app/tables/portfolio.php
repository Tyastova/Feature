<?php 

use App\models\Master;
use App\models\Portfolio;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php'; 

$masters = Master::mastera();
$portfolios = Portfolio::port();

require_once $_SERVER['DOCUMENT_ROOT'] . '/views/portfolio/portfolio.view.php';