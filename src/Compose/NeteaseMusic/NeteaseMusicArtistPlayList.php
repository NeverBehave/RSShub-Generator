<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:16
 */

namespace Compose;

class NeteaseMusicArtistPlayList extends Base
{
    public static function name(): string
    {
        return '网易云音乐歌手专辑';
    }

    public static function description(): string
    {
        return '歌手专辑订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#歌手专辑';
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

        return "/ncm/artist/$id";
    }
}