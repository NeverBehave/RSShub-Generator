<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */

namespace Compose;

class UUNovel extends Base
{
    public static function name(): string
    {
        return 'UU小说章节';
    }

    public static function description(): string
    {
        return '获取小说章节';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#小说章节-2';
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

        return "uukanshu/chapter/$id";
    }
}