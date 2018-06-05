<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */

namespace Compose;

class NYMorning extends Base
{
    public static function name(): string
    {
        return '纽约时报';
    }

    public static function description(): string
    {
        return '纽约时报新闻早报订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#新闻早报';
    }

    public static function parameters(): array
    {
        return [];
    }

    public function compose(): string
    {
        return 'nytimes/morning_post';
    }
}