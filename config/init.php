<?php
  
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/app');
define("CORE", ROOT . '/vendor/core');
define("LIBS", ROOT . '/vendor/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT","default");

echo $app_path = "{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";   
$app_path = preg_replace("#[^/]+$#", "", $app_path);
$app_path = str_replace("/public/", "", $app_path);


require_once ROOT . "/vendor/autoload.php"; 
