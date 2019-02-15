<?php
if (!defined('APP_API')) {
    exit();
}

return array(
    'version' => APP_VERSION,
    'build' => APP_BUILD,
    'releasetime' => APP_RELEASE,
    'download' => 'http://api.intranet.pub/?s=download&version=' . APP_VERSION . '&build=' . APP_BUILD,
    'changelog' => 'https://inpanel.org/changelog.html',
);
