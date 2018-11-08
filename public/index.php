<?php
/*
 *front controller 
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \shop\App;

//var_dump(\shop\App);
\shop\App::$app;

debug(\shop\App::$app);

debug(\shop\App::$app->getProperties());

