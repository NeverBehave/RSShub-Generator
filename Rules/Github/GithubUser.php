<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:59
 */

namespace Rules;

class GithubUser extends Base
{
    public function name(): string
    {
        return 'Github User';
    }

    public function description(): string
    {
        return '订阅指定用户的仓库';
    }

    public function docs(): string
    {
        return 'https://docs.rsshub.app/#用户仓库';
    }

    public function validate(): bool
    {
        if (!empty($this->parsed->slash[0])) {
            return true;
        }

        return false;
    }

    public function compose(): string
    {
        $username = $this->parsed->slash[0];

        return $this->baseUrl . "github/repos/$username";
    }
}