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

    public function compose(): array
    {
        $language = $this->parsed->slash[1];
        $frequency = $this->parsed->query['since'];

        return [
            'since' => $frequency,
            'language' => $language
        ];
    }
}