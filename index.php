<?php
/*
 * 请求格式
 * GET     http://api.intranet.pub/info                        # 列出所有
 * GET     http://api.intranet.pub/info/1                      # 获取指定信息
 * POST    http://api.intranet.pub/info?name=SAT&count=23      # 新建
 * PUT     http://api.intranet.pub/info/1?name=SAT&count=23    # 更新指定信息（全部信息）
 * PATCH   http://api.intranet.pub/info/1?name=SAT             # 更新指定信息（部分信息）
 * DELETE  http://api.intranet.pub/info/1                      # 删除指定
 */

define('INTRANET_API', true);
define('ROOT', dirname(__FILE__));
define('APP_NAME', 'Intranet');
define('APP_SITE', 'https://intranet.pub');
define('APP_VERSION', '1.1.1');
define('APP_BUILD', '14');
define('APP_RELEASE', '2018-12-13 21:41:25 CST');
define('APP_DEBUG', 0);
header("X-Powered-By: Intranet");
header("Copyright: Intranet");

// error_reporting(E_ALL ^ E_NOTICE);

date_default_timezone_set('Asia/Shanghai');

// 数据操作类
require_once ROOT . '/core/Request.php';
// 输出类
require_once ROOT . '/core/Response.php';

// 获取数据
$data = Request::getRequest();
// 输出结果
Response::sendResponse($data);
