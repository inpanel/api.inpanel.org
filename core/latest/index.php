<?php
if (!defined('INTRANET_API')) {
    exit();
}

return array(
    'version' => APP_VERSION,
    'build' => APP_BUILD,
    'releasetime' => APP_RELEASE,
    'download' => 'http://api.intranet.pub/?s=download&version=' . APP_VERSION . '&build=' . APP_BUILD,
    'changelog' => 'http://intranet.pub/changelog.html',
);
