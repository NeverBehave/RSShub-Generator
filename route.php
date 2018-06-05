<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:55
 */

/**
 * 规则：域名，前缀，方法
 */
return [
    'bilibili.com' => [

    ],
    'dapenti.com' => [
        'www' => ['Dapenti']
    ],
    'jandan.net' => [
        '' => ['Jiandan'],
    ],
    'github.com' => [
        '' => [
            'GithubUser',
            'GithubTrending'
        ],
    ]
];