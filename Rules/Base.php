<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:58
 */

namespace Rules;

abstract class Base
{
    protected $baseUrl = 'https://rsshub.app/';
    protected $parsed;

    public function __construct(\Split $parsed)
    {
        $this->parsed = $parsed;
    }

    public abstract function name(): string;

    public abstract function description(): string;

    public abstract function docs(): string;

    public abstract function validate(): bool;

    public abstract function compose(): string;
}