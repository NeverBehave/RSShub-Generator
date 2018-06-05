<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:57
 */

namespace Compose;

class BilibiliUserVideo extends Base
{
    public static function name(): string
    {
        return 'B站UP投稿';
    }

    public static function description(): string
    {
        return '投稿订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#up-主投稿';
    }

    public static function parameters(): array
    {
        return [
            'uid' => ['required']
        ];
    }

    public function compose(): string
    {
        $uid = $this->data['uid'];

        return "bilibili/user/video/$uid";
    }
}