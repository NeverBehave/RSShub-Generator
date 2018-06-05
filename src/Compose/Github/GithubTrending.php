<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:59
 */

namespace Compose;

class GithubTrending extends Base
{
    public static function name(): string
    {
        return 'Github Trending';
    }

    public static function description(): string
    {
        return '获得特定语言的热门仓库';
    }

    public static function docs(): string
    {
        return 'https://docs.rsshub.app/#trending';
    }

    public static function parameters(): array
    {
        return [
            'since' => ['required']
        ];
    }

    public function compose(): string
    {
        $language = $this->data['language'];
        $frequency = $this->data['since'];

        return "github/trending/$frequency/$language";
    }
}