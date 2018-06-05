<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */
namespace Compose;

class Dapenti extends Base
{
    public static function name(): string
    {
        return '图卦';
    }

    public static function description(): string
    {
        return '打喷嚏->图卦';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#图卦';
    }

    public static function parameters(): array
    {
        return [];
    }

    public function compose(): string
    {
        return 'dapenti/tugua';
    }
}