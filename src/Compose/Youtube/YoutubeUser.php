<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:47
 */

namespace Compose;

class YoutubeUser extends Base
{
    public static function name(): string
    {
        return 'Youtube 用户';
    }

    public static function description(): string
    {
        return '用户订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#用户-3';
    }

    public static function parameters(): array
    {
        return [
            'username' => ['required']
        ];
    }

    public function compose(): string
    {
        $username = $this->data['username'];

        return "youtube/user/$username";
    }
}