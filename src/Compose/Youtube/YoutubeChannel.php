<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:49
 */

namespace Compose;

class YoutubeChannel extends Base
{
    public static function name(): string
    {
        return 'Youtube 频道';
    }

    public static function description(): string
    {
        return 'Youtube 频道订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#频道';
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

        return "youtube/channel/$id";
    }
}