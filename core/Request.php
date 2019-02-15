<?php
if (!defined('APP_API')) {
    exit();
}

/**
 * 数据操作类
 */
class Request
{
    // 允许的请求方式
    private static $method_type = array('get', 'post', 'put', 'patch', 'delete');

    public static function getRequest()
    {
        // 请求方式
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        if (in_array($method, self::$method_type)) {
            //调用请求方式对应的方法
            // $data_name = $method . 'Data';
            // return self::$data_name($_REQUEST);
            return self::getData($_REQUEST);
        }
        return false;
    }

    // GET 获取信息
    private static function getData($request_data)
    {
        $s = $request_data['s'];
        if (isset($s) && $s == 'latest') {
            $configs = array();
            $path = ROOT . '/core/latest/index.php';
            if (file_exists($path)) {
                $configs = include $path;
                return $configs;
            }
        } elseif (isset($s)) {
            $path = ROOT . '/core/' . $s . '/index.php';
            if (file_exists($path)) {
                $configs = include $path;
                return $configs;
            }
        }
    }

}
