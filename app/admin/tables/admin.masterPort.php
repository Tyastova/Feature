<?php

use App\models\Master;
use App\models\Portfolio;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$mastersPortadmin = Portfolio::port();
$mastersAd = Master::mastera();


require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/views/admin.masrerPort.view.php";

?>