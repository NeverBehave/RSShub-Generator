<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */

namespace Compose;

class Jiandan extends Base
{
    public static function name(): string
    {
        return '煎蛋无聊图';
    }

    public static function description(): string
    {
        return '最近煎蛋的一些无聊图';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#无聊图';
    }

    public static function parameters(): array
    {
        return [];
    }

    public function compose(): string
    {
        return 'jandan/pic';
    }
}