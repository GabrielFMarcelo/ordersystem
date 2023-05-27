<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';
$user = new User();
$user->logout();
Redirect::to('homepage.php');
 ?>
