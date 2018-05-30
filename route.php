<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:55
 */

$route = [];
$route['bilibili.com'] = [

];
$route['www.dapenti.com'] = [
    'directory' => 'Dapenti',
    'methods' => ['Dapenti']
];
$route['jandan.net'] = [
    'directory' => 'Jiandan',
    'methods' => ['Jiandan'],
];
$route['github.com'] = [
    'directory' => 'Github',
    'methods' => [
        'GithubUser',
        'GithubTrending'
    ]
];