<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */

namespace Compose;

class YandeReTag extends Base
{
    public static function name(): string
    {
        return 'yande.re Post';
    }

    public static function description(): string
    {
        return '获取帖子';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#posts-2';
    }

    public static function parameters(): array
    {
        return [
            'tags' => ['optional']
        ];
    }

    public function compose(): string
    {
        $tags = $this->data['tags'];

        return "yande.re/post/$tags";
    }
}