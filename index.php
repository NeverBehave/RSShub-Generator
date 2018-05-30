<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:46
 */

require_once 'Split.php';

$url = $_GET['url'];
if (empty($url)) {
    jsonFormat(NULL, 400, 'No address given');
}
$parse = new Split($url);
//var_dump($parse);
if (empty($parse->host)) {
    jsonFormat(NULL, 400, 'Cannot resolve Host');
}

require_once 'route.php';

if (empty($route[$parse->host])) {
    jsonFormat(NULL, 404, 'Method No Found');
}

$data = [];
require_once 'Rules/Base.php';

foreach ($route[$parse->host]['methods'] as $method) {
    $qualifyName = __NAMESPACE__ . "\\Rules\\$method";
    require_once './Rules/' . $route[$parse->host]['directory'] . "/$method.php";
    if (class_exists($qualifyName)) {
        try {
            $class = new $qualifyName($parse);
            $info = getClassInfo($class);
            if (!$class->validate()) {
                $info['status'] = false;
                $info['url'] = '';
            } else {
                $info['status'] = true;
                $info['url'] = $class->compose();
            }
            $data[] = $info;
        } catch (Exception $e) {
            var_dump($e);
        }
    } else {
        jsonFormat(NULL, 500, 'Something goes wrong! Please try again later.');
    }
}

jsonFormat($data);

function jsonFormat($data = NULL, $status = 200, $message = 'success')
{
    echo json_encode([
        'status' => $status,
        'message' => $message,
        'data' => $data
    ]);
    exit();
}

function getClassInfo(\Rules\Base $class)
{
    return [
        'name' => $class->name(),
        'description' => $class->description(),
        'docs' => $class->docs()
    ];
}