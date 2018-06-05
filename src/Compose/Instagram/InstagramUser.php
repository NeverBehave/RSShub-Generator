<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:51
 */

namespace Compose;

class InstagramUser extends Base
{
    public static function name(): string
    {
        return 'Instagram 用户';
    }

    public static function description(): string
    {
        return 'Instagram 用户动态订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#用户-2';
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

        return "instagram/user/$id";
    }
}