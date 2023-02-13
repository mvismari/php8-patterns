<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
function autoloader($class)
{
    $filename = str_replace('\\', '/', $class) . '.php';
    include($filename);
}
spl_autoload_register('autoloader');