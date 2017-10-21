<?php
defined('IN_IA') or exit('Access Denied');
function weliam_autoLoad($class_name)
{
    $file = WL_CORE . 'class/' . $class_name . '.class.php';
    if (is_file($file)) {
        require_once $file;
    }
    return false;
}

spl_autoload_register('weliam_autoLoad');
?>