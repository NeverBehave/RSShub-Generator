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
    public function validate(): bool
    {
        return true;
    }

    public function compose(): array
    {
        return [];
    }
}