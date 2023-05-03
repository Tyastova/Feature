<?php

use App\models\Admin;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if(isset($_POST["btn"])){
    $_SESSION['login']=$_POST['login'];
    $_SESSION['password']=$_POST['password'];
    $admin = Admin::getAdmin($_POST['login'], $_POST['password']);
    if(Admin::insert($_POST)){
    $admin = Admin::getAdmin($_POST['login'], $_POST['password']);
    $_SESSION['auth'] = true;

}else{
    $_SESSION['auth'] = false;
}
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/admin/views/admin.regAdmin.view.php';

?>