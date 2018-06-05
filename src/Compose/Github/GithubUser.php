<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:59
 */

namespace Compose;

class GithubUser extends Base
{
    public static function name(): string
    {
        return 'Github User';
    }

    public static function description(): string
    {
        return '订阅指定用户的仓库';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#用户仓库';
    }

    public static function parameters(): array
    {
        return [
            'username' => ['required']
        ];
    }

    public function compose(): string
    {
        $username = $this->data['username'];

        return "github/repos/$username";
    }
}