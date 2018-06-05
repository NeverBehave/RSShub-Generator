<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午4:00
 */

namespace Compose;

class CCTVCategory extends Base
{
    public static function name(): string
    {
        return 'CCTV央视新闻';
    }

    public static function description(): string
    {
        return '专题订阅';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#专题-2';
    }

    public static function parameters(): array
    {
        return [
            'category' => ['required']
        ];
    }

    public function compose(): string
    {
        $category = $this->data['category'];

        return "cctv/$category";
    }
}