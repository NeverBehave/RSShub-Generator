<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */
namespace Rules;

class Jiandan extends Base
{
    public function name(): string
    {
        return '煎蛋无聊图';
    }

    public function description(): string
    {
        return '最近煎蛋的一些无聊图';
    }

    public function docs(): string
    {
        return 'https://docs.rsshub.app/#无聊图';
    }

    public function validate(): bool
    {
        return true;
    }

    public function compose(): string
    {
        return $this->baseUrl . 'jandan/pic';
    }
}