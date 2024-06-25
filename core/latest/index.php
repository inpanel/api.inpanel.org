<?php
if (!defined('APP_API')) {
    exit();
}

return array(
    'version' => APP_VERSION,
    'build' => APP_BUILD,
    'releasetime' => APP_RELEASE,
    'download' => 'https://api.inpanel.org/?s=download&version=' . APP_VERSION . '&build=' . APP_BUILD,
    'changelog' => 'https://inpanel.org/changelog.html',
);
