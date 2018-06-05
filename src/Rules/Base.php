<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:58
 */

namespace Rules;

use Utils\Split;

abstract class Base
{
    /**
     * Split obj
     *
     * @var Split
     */
    protected $parsed;

    /**
     * Base constructor.
     * @param Split $parsed
     */
    public function __construct(Split $parsed)
    {
        $this->parsed = $parsed;
    }

    /**
     * Get the name of compose class
     * Override when necessary.
     *
     * @return string
     */
    public static function composeClass(): string
    {
        return (substr(static::class, strrpos(static::class, '\\') + 1));
    }

    public abstract function validate(): bool;

    /**
     * Return the Parameters for the compose Class
     *
     * @return array
     */
    public abstract function compose(): array;
}