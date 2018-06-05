<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:15
 */

namespace Compose;

class NeteaseMusicUserPlayList extends Base
{
    public static function name(): string
    {
        return '网易云音乐用户歌单';
    }

    public static function description(): string
    {
        return '用户歌单订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#用户歌单';
    }

    public static function parameters(): array
    {
        return [
            'uid' => ['number']
        ];
    }

    public function compose(): string
    {
        $uid = $this->data['uid'];

        return "/ncm/user/playlist/$uid";
    }
}