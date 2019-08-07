<?php
if (!defined('APP_API')) {
    exit();
}

$action = $_REQUEST['a'];
$action = ROOT . '/core/site_packages/' . $action . '.php';
$action = file_exists($action) ? $action : 'packages.php';

return include $action;
