<?php

const _JEXEC = 1;

if (PHP_SAPI !== 'cli') {
    die('This is a command line only application.');
}

$path = realpath(SYMLA_PATH_ROOT);

if (file_exists($path . '/cli/defines.php')) {
    require_once $path . '/cli/defines.php';
}

if (!defined('_JDEFINES')) {
    if ($application === 'administrator') {
        $path .= '/administrator';
    }

    define('JPATH_BASE', $path);
    require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_LIBRARIES . '/import.legacy.php';

require_once JPATH_LIBRARIES . '/cms.php';

require_once JPATH_CONFIGURATION . '/configuration.php';
