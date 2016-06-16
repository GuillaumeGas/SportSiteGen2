<?php

if(!isset($_SERVER['DOCUMENT_ROOT'])) {
    die();
}

//root of the backend not working !!
//define('_PATH_', $_SERVER['DOCUMENT_ROOT'].'/');
define('_PATH_', __DIR__.'/../');

//root of config files
define('_CONF_', _PATH_.'config/');

//root of controller files
define('_CTRL_', _PATH_.'controllers/');

//root of core files
define('_CORE_', _PATH_.'core/');

//root of log files
define('_LOGS_', _PATH_.'logs/');

//root of template files
define('_TPL_', _PATH_.'tpl/');

//root of front
define('_FRONT_', _PATH_."../frontend/");
?>