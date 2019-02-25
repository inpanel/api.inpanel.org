<?php

// error_reporting(E_ALL ^ E_NOTICE);
define('APP_API', true);
define('ROOT', dirname(__FILE__));
define('APP_NAME', 'InPanel');
define('APP_SITE', 'https://inpanel.org');
define('APP_VERSION', '1.1.1');
define('APP_BUILD', '18');
define('APP_RELEASE', '2019-02-23 14:13:00 CST');
define('APP_DEBUG', 0);
header("X-Powered-By: InPanel");
header("Copyright: InPanel");
date_default_timezone_set('Asia/Shanghai');
require_once ROOT . '/core/Request.php';
require_once ROOT . '/core/Response.php';
$data = Request::getRequest();
Response::sendResponse($data);
