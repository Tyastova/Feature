<?php

use App\models\Master;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

$item = Master::deleteMasterPhotoInPort($_POST['del-btn-master-photo']);

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/admin/tables/admin.portPhotoMasterShow.php";
