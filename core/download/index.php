<?php
if (!defined('INTRANET_API')) {
    exit();
}

$version = $_REQUEST['version'];
$build = $_REQUEST['build'];

if (isset($version) && isset($build)) {
    $v = $version == '1.1.1' && $build < 17 ? '' : 'v';
    $url = 'https://github.com/intranet-panel/intranet/archive/'. $v . $version . 'b' . $build . '.tar.gz';
    Header("Location: $url");
}
