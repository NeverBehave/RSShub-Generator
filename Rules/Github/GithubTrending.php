<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午2:59
 */

namespace Rules;

class GithubTrending extends Base
{
    public function name(): string
    {
        return 'Github Trending';
    }

    public function description(): string
    {
        return '获得特定语言的热门仓库';
    }

    public function docs(): string
    {
        return 'https://docs.rsshub.app/#trending';
    }

    public function validate(): bool
    {
        if (
            $this->parsed->slash[0] === 'trending'
            && !empty($this->parsed->query['since'])
        ) {
            return true;
        }

        return false;
    }

    public function compose(): string
    {
        $language = $this->parsed->slash[1];
        $frequency = $this->parsed->query['since'];

        return $this->baseUrl . "github/trending/$frequency/$language";
    }
}