<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午4:01
 */

namespace Compose;

class IqiyiComic extends Base
{
    public static function name(): string
    {
        return '爱奇艺动漫';
    }

    public static function description(): string
    {
        return '动漫订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#动漫';
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

        return "iqiyi/dongman/$id";
    }
}