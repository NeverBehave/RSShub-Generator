<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午2:53
 */

namespace Compose;

class YandeReRecentPost extends Base
{
    public static function name(): string
    {
        return 'Popular Recent Posts';
    }

    public static function description(): string
    {
        return '最热帖子';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#popular-recent-posts-2';
    }

    public static function parameters(): array
    {
        return [
            'period' => ['optional']
        ];
    }

    public function compose(): string
    {
        $period = $this->data['period'];

        return "yande.re/post/popular_recent/$period";
    }
}