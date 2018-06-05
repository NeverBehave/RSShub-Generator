<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 下午2:57
 */

namespace Compose;

class ReadhubCategory extends Base
{
    public static function name(): string
    {
        return 'ReadHub 分类';
    }

    public static function description(): string
    {
        return 'ReadHub 分类RSS';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#分类-3';
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

        return "readhub/category/$category";
    }
}