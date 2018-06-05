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

$class = $_GET['identification'];
parse_str($_SERVER['QUERY_STRING'], $data);
if (!(isset($class))) {
    Formatter::jsonFormat(NULL, 400, 'No address given');
}

$namespace = 'Compose';
$c = ClassUtils::findSpecificClassUnderANamespace($namespace, $class);

if (!empty($c)) {
    $c = ClassUtils::initSpecificClass($c[1], $c[0], $data);
    $composed = $c->getComposedUrl();
    $result = ClassUtils::getComposeClassInfo($c);

    if ($composed === '') {
        $result['status'] = false;
        $result['url'] = NULL;
        Formatter::jsonFormat($result, 400, 'Parameters Mismatch');
    } else {
        $result['status'] = true;
        $result['url'] = $composed;
        Formatter::jsonFormat($result);
    }

    Formatter::jsonFormat($result);
} else {
    Formatter::jsonFormat(NULL, 400, 'Method No Found');
}
