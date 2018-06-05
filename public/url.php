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
use Utils\Split;

// Check Url
$url = $_GET['url'];
if (empty($url)) {
    Formatter::jsonFormat(NULL, 400, 'No address given');
}

// Parse Url
$parse = new Split($url);

if (empty($parse->host)) {
    Formatter::jsonFormat(NULL, 400, 'Cannot resolve Host');
}

//Check Methods
$route = (include '../route.php');

$methods = $route[$parse->domain][$parse->domainPrefix];
if (empty($methods)) {
    Formatter::jsonFormat(NULL, 404, 'Method No Found');
}

// Load All Applied
$data = [];
$namespace = 'Rules';
$composeNamespace = 'Compose';

foreach ($methods as $method) {
    // Get Rule
    $c = ClassUtils::findSpecificClassUnderANamespace($namespace, $method);
    if (!empty($c)) {
        // Init Rule
        $rule = ClassUtils::initSpecificClass($c[1], $c[0], $parse);
        // Validate
        if (!$rule->validate()) {
            $info['status'] = false;
            $info['url'] = '';
        } else {
            // Run Compose
            $info['status'] = true;
            $compose = runCompose($rule->composeClass(), $rule->compose());
            if ($compose === '') {
                Formatter::jsonFormat(NULL, 500, 'Rules Mismatch, please report this Error');
            }
            $info['url'] = $compose;
        }
        // Add Compose info
        $info['compose'] = ClassUtils::getComposeClassInfo($rule->composeClass());
        $data[] = $info;
    } else {
        Formatter::jsonFormat(NULL, 500, 'Something goes wrong! Please try again later.');
    }
}

Formatter::jsonFormat($data);


function runCompose($class, $data)
{
    $c = ClassUtils::findSpecificClassUnderANamespace('Compose', $class);
    if (empty($c)) {
        return '';
    }

    $class = ClassUtils::initSpecificClass($c[1], $c[0], $data);
    return $class->getComposedUrl();
}