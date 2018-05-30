<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */
namespace Rules;

class Dapenti extends Base
{
    public function name(): string
    {
        return '图卦';
    }

    public function description(): string
    {
        return '打喷嚏->图卦';
    }

    public function docs(): string
    {
        return 'https://docs.rsshub.app/#图卦';
    }

    public function validate(): bool
    {
        return true;
    }

    public function compose(): string
    {
        return $this->baseUrl . 'dapenti/tugua';
    }
}