<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:53
 */

namespace Compose;

class DisqusForum extends Base
{
    public static function name(): string
    {
        return 'Disque 论坛';
    }

    public static function description(): string
    {
        return '论坛评论订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#评论';
    }

    public static function parameters(): array
    {
        return [
            'forum' => ['required']
        ];
    }

    public function compose(): string
    {
        $forum = $this->data['forum'];

        return "disqus/posts/$forum";
    }
}