<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:54
 */

namespace Compose;

class DouyuRoomOnline extends Base
{
    public static function name(): string
    {
        return '斗鱼房间';
    }

    public static function description(): string
    {
        return '斗鱼房间开播';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#直播间开播';
    }

    public static function parameters(): array
    {
        return [
            'id' => ['number']
        ];
    }

    public function compose(): string
    {
        $id = $this->data['id'];

        return "douyu/room/$id";
    }
}