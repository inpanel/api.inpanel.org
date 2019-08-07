<?php
if (!defined('APP_API')) {
    exit();
}

$name = $_REQUEST['name'];
$version = $_REQUEST['version'];

// $action = ROOT . '/core/site_packages/' . $action . '.php';
// $action = file_exists($action) ? $action : 'packages.php';

// return $_REQUEST;
// $url = 'https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip';
// Header('Location: ' . ROOT . '/data/phpMyAdmin-4.9.0.1-all.tar.gz');
// include ROOT . '/data/phpMyAdmin-4.9.0.1-all.tar.gz';

header("Content-type:application/octet-stream");
header("Accept-Ranges:bytes");
// header("Accept-Length:" . $file_Size);
// header("Content-Disposition: attachment; filename=" . $filename);

// echo ROOT . '/data/phpMyAdmin-4.9.0.1-all.tar.gz';
// echo '<br>';

$file = ROOT . '/data/' . $name . '-' . $version . '.tar.gz'; // 文件的真实地址（支持url,不过不建议用url）

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
exit(404);
