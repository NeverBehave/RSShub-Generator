<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:26
 */

namespace Rules;

class TwitterUser extends Base
{
    public function validate(): bool
    {
        if (!empty($this->parsed->slash[0])) {
            return true;
        }

        return false;
    }

    public function compose(): array
    {
        $username = $this->parsed->slash[0];

        return [
            'id' => $username
        ];
    }
}