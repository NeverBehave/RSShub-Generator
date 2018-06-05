<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午2:59
 */

namespace Compose;

class TelegramChannel extends Base
{
    public static function name(): string
    {
        return 'Telegram 频道订阅';
    }

    public static function description(): string
    {
        return 'Telegram 频道订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#频道-2';
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

        return "telegram/channel/$username";
    }
}