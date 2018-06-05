<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:15
 */

namespace Compose;

class NeteaseMusicPlayList extends Base
{
    public static function name(): string
    {
        return '网易云音乐歌单歌曲';
    }

    public static function description(): string
    {
        return '歌单歌曲订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#歌单歌曲';
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

        return "/ncm/playlist/$id";
    }
}