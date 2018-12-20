<?php
if (!defined('INTRANET_API')) {
    exit();
}

$version = $_REQUEST['version'];
$build = $_REQUEST['build'];

if (isset($version) && isset($build)) {
    $url = 'https://github.com/crogram/intranet/archive/v' . $version . 'b' . $build . '.tar.gz';
    Header("Location: $url");
}
