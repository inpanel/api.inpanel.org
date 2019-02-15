<?php
if (!defined('APP_API')) {
    exit();
}

return array(
    array(
        "name" => "服务器管理类[测试请勿安装]",
        "packages" => array(
            array(
                "code" => "phpmyadmin",
                "name" => "phpMyAdmin",
                "official_site" => "http://www.phpmyadmin.net/",
                "description" => "基于 PHP 的 MySQL 数据库管理工具。",
                "versions" => array(
                    array(
                        "code" => "3.5.3-all",
                        "name" => "3.5.3 多国语言版",
                        "size" => "5.9M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-3.5.3-all-languages",
                    ),
                    array(
                        "code" => "3.5.3-english",
                        "name" => "3.5.3 英文版",
                        "size" => "2.8M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-3.5.3-english",
                    ),
                ),
            ),
        ),
    ),
    array(
        "name" => "博客类[测试请勿安装]",
        "packages" => array(
            array(
                "code" => "wordpress",
                "name" => "WordPress",
                "official_site" => "http://wordpress.org/",
                "description" => "流行的 PHP 博客系统。",
                "versions" => array(
                    array(
                        "code" => "3.4.2",
                        "name" => "3.4.2 英文版",
                        "size" => "4.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "3.4.2-zh_CN",
                        "name" => "3.4.2 简体中文版",
                        "size" => "4.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                ),
            ),
            array(
                "name" => "Baidu",
                "official_site" => "http://www.baidu.com",
                "description" => "测试中，请不要安装",
            ),
            array(
                "name" => "SoSo",
                "official_site" => "http://www.SoSo.com",
                "description" => "测试中，请不要安装",
            ),
        ),
    ),
    array(
        "name" => "社区论坛类[测试请勿安装]",
        "packages" => array(
            array(
                "code" => "phpwind",
                "name" => "phpwind",
                "official_site" => "http://www.phpwind.com/",
                "description" => "基于 PHP+MySQL 的开源论坛程序。",
                "versions" => array(
                    array(
                        "code" => "8.7-gbk",
                        "name" => "8.7 简体GBK",
                        "size" => "13.4M",
                        "ext" => ".zip",
                        "core_path" => "phpwind_GBK_8.7/upload",
                    ),
                    array(
                        "code" => "8.7-big5",
                        "name" => "8.7 繁体BIG5",
                        "size" => "13.4M",
                        "ext" => ".zip",
                        "core_path" => "phpwind_BIG5_8.7/upload",
                    ),
                    array(
                        "code" => "8.7-utf8",
                        "name" => "8.7 简体UTF8",
                        "size" => "13.6M",
                        "ext" => ".zip",
                        "core_path" => "phpwind_UTF8_8.7/upload",
                    ),
                    array(
                        "code" => "9.0rc-gbk",
                        "name" => "9.0 RC 版GBK",
                        "size" => "8.9M",
                        "ext" => ".zip",
                        "core_path" => "upload",
                    ),
                    array(
                        "code" => "9.0rc-utf8",
                        "name" => "9.0 RC 版UTF8",
                        "size" => "9.1M",
                        "ext" => ".zip",
                        "core_path" => "upload",
                    ),
                ),
            ),
        ),
    ),
);
