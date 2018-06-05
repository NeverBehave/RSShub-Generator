<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:50
 */

namespace Compose;

class TwitterUser extends Base
{
    public static function name(): string
    {
        return 'Twitter 用户';
    }

    public static function description(): string
    {
        return '用户动态订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#用户';
    }

    public static function parameters(): array
    {
        return [
            'id' => ['required']
        ];
    }

    public function compose(): string
    {
        $id = $this->data['id'];

        return "twitter/user/$id";
    }
}