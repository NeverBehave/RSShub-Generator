<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:46
 */

require "../vendor/autoload.php";

use Utils\ClassUtils;
use Utils\Formatter;

$classes = (include "../vendor/composer/autoload_classmap.php");

$namespace = 'Compose\\';

$data = [];
foreach ($classes as $class => $path) {
    if (strpos($class, $namespace) === 0 && $class !== 'Compose\\Base') {
        require_once $path;
        $data['compose'][] = ClassUtils::getComposeClassInfo($class);
    }
}

Formatter::jsonFormat($data);
