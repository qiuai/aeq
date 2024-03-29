<?php


define('AAA_CATE', 'retail');
define('AAA_SITE', 'aeq');

// HTTP
define('HTTP_SERVER', 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/');
define('HTTPS_SERVER', 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/');

// DIR
define('DIR_OPENCART', str_replace('\'', '/', realpath(dirname(__FILE__))) . '/');
define('DIR_APPLICATION', DIR_OPENCART.'catalog/');
define('DIR_SYSTEM', DIR_OPENCART.'system/');
define('DIR_DATABASE', DIR_OPENCART.'system/database/');
define('DIR_LANGUAGE', DIR_OPENCART.'catalog/language/');
define('DIR_TEMPLATE', DIR_OPENCART.'catalog/view/theme/');
define('DIR_CONFIG', DIR_OPENCART.'system/config/');
define('DIR_IMAGE', DIR_OPENCART.'image/');
define('DIR_CACHE', DIR_OPENCART.'system/cache/');
define('DIR_DOWNLOAD', DIR_OPENCART.'system/download/');
//define('DIR_UPLOAD', DIR_OPENCART.'system/upload/');
//define('DIR_MODIFICATION', DIR_OPENCART.'system/modification/');
define('DIR_LOGS', DIR_OPENCART.'system/logs/');


// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '3adb');
define('DB_PASSWORD', 'Feb232015');
define('DB_DATABASE', AAA_CATE . '_' . AAA_SITE);
define('DB_PREFIX', 'oc_');
