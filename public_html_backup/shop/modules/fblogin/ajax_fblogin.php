<?php
include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('fblogin.php');

$thismodule = new fblogin();
$thismodule->verifycustomer(Tools::getValue('resp'));


?>