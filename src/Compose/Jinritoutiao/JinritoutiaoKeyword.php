<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午3:56
 */

namespace Compose;

class JinritoutiaoKeyword extends Base
{
    public static function name(): string
    {
        return '今日头条关键词';
    }

    public static function description(): string
    {
        return '';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#关键词-2';
    }

    public static function parameters(): array
    {
        return [
            'keyword' => ['required']
        ];
    }

    public function compose(): string
    {
        $keyword = $this->data['keyword'];

        return "jinritoutiao/keyword/$keyword";
    }
}