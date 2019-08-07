<?php
if (!defined('APP_API')) {
    exit();
}

// array(
//     "code" => "4.9.0.1-all", // 下载文件名
//     "name" => "4.9.0.1 多国语言版", // 显示名称
//     "size" => "9.6M",
//     "ext" => ".tar.gz", // 下载文件后缀名
//     "core_path" => "phpMyAdmin-4.9.0.1-all-languages", // 原始(解压后)文件夹
// ),

return array(
    array(
        "name" => "服务器管理类",
        "packages" => array(
            array(
                "code" => "phpmyadmin",
                "name" => "phpMyAdmin",
                "official_site" => "http://www.phpmyadmin.net/",
                "description" => "基于 PHP 的 MySQL 数据库管理工具。",
                "versions" => array(
                    array(
                        "code" => "4.9.0.1-all",
                        "name" => "4.9.0.1 多国语言版",
                        "size" => "9.6M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.9.0.1-all-languages",
                    ),
                    array(
                        "code" => "4.9.0.1-english",
                        "name" => "4.9.0.1 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.9.0.1-english",
                    ),
                    array(
                        "code" => "4.9.0-all",
                        "name" => "4.9.0 多国语言版",
                        "size" => "9.6M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.9.0-all-languages",
                    ),
                    array(
                        "code" => "4.9.0-english",
                        "name" => "4.9.0 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.9.0-english",
                    ),
                    array(
                        "code" => "4.8.5-all",
                        "name" => "4.8.5 多国语言版",
                        "size" => "9.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.5-all-languages",
                    ),
                    array(
                        "code" => "4.8.5-english",
                        "name" => "4.8.5 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.5-english",
                    ),
                    array(
                        "code" => "4.8.4-all",
                        "name" => "4.8.4 多国语言版",
                        "size" => "9.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.4-all-languages",
                    ),
                    array(
                        "code" => "4.8.4-english",
                        "name" => "4.8.4 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.4-english",
                    ),
                    array(
                        "code" => "4.8.3-all",
                        "name" => "4.8.3 多国语言版",
                        "size" => "9.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.3-all-languages",
                    ),
                    array(
                        "code" => "4.8.3-english",
                        "name" => "4.8.3 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.3-english",
                    ),
                    array(
                        "code" => "4.8.2-all",
                        "name" => "4.8.2 多国语言版",
                        "size" => "9.1M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.2-all-languages",
                    ),
                    array(
                        "code" => "4.8.2-english",
                        "name" => "4.8.2 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.2-english",
                    ),
                    array(
                        "code" => "4.8.1-all",
                        "name" => "4.8.1 多国语言版",
                        "size" => "9.1M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.1-all-languages",
                    ),
                    array(
                        "code" => "4.8.1-english",
                        "name" => "4.8.1 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.1-english",
                    ),
                    array(
                        "code" => "4.8.0-all",
                        "name" => "4.8.0 多国语言版",
                        "size" => "9.1M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.0-all-languages",
                    ),
                    array(
                        "code" => "4.8.0-english",
                        "name" => "4.8.0 英文版",
                        "size" => "5.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.8.0-english",
                    ),
                    array(
                        "code" => "4.7.9-all",
                        "name" => "4.7.9 多国语言版",
                        "size" => "9.9M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.7.9-all-languages",
                    ),
                    array(
                        "code" => "4.7.9-english",
                        "name" => "4.7.9 英文版",
                        "size" => "5.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "phpMyAdmin-4.7.9-english",
                    )
                )
            )
        )
    ),
    array(
        "name" => "博客类",
        "packages" => array(
            array(
                "code" => "wordpress",
                "name" => "WordPress",
                "official_site" => "https://wordpress.org/",
                "description" => "流行的 PHP 博客系统。",
                "versions" => array(
                    array(
                        "code" => "5.2.2",
                        "name" => "5.2.2 英文版",
                        "size" => "10.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.2.2-zh_CN",
                        "name" => "5.2.2 简体中文版",
                        "size" => "11.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.2.1",
                        "name" => "5.2.1 英文版",
                        "size" => "10.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.2.1-zh_CN",
                        "name" => "5.2.1 简体中文版",
                        "size" => "11.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.2",
                        "name" => "5.2 英文版",
                        "size" => "10.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.2-zh_CN",
                        "name" => "5.2 简体中文版",
                        "size" => "11.2M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.1.1",
                        "name" => "5.1.1 英文版",
                        "size" => "10.2M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.1.1-zh_CN",
                        "name" => "5.1.1 简体中文版",
                        "size" => "10.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.0.4",
                        "name" => "5.0.4 英文版",
                        "size" => "10.0M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "5.0.4-zh_CN",
                        "name" => "5.0.4 简体中文版",
                        "size" => "10.6M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "4.9.10",
                        "name" => "4.9.10 英文版",
                        "size" => "8.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "4.9.4-zh_CN",
                        "name" => "4.9.4 简体中文版",
                        "size" => "8.7M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "4.8.9",
                        "name" => "4.8.9 英文版",
                        "size" => "7.6M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    ),
                    array(
                        "code" => "4.8.3-zh_CN",
                        "name" => "4.8.3 简体中文版",
                        "size" => "8.3M",
                        "ext" => ".tar.gz",
                        "core_path" => "wordpress",
                    )
                )
            )
        )
    )
);
