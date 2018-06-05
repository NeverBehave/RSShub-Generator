<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午4:02
 */

namespace Compose;

class Tieba extends Base
{
    public static function name(): string
    {
        return '贴吧帖子';
    }

    public static function description(): string
    {
        return '帖子列表订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#帖子列表';
    }

    public static function parameters(): array
    {
        return [
            'name' => ['required']
        ];
    }

    public function compose(): string
    {
        $name = $this->data['name'];
        return "tieba/forum/$name";
    }
}