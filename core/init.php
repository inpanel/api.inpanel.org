<?php
if (!defined('APP_API')) {
    exit();
}

define('APP_NAME', 'InPanel');
define('APP_SITE', 'https://inpanel.org');
define('APP_VERSION', '1.1.1');
define('APP_BUILD', '30');
define('APP_RELEASE', '2024-06-25');
define('APP_DEBUG', 0);
header("X-Powered-By: INPANEL");
header("Copyright: INPANEL");
date_default_timezone_set('Asia/Shanghai');

require_once 'Request.php';
require_once 'Response.php';
$data = Request::getRequest();
Response::sendResponse($data);
