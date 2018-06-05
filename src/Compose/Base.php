<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/5/30
 * Time: 下午1:58
 */

namespace Compose;

abstract class Base
{
    /**
     * BaseUrl
     * @var string
     */
    private $baseUrl = 'https://rsshub.app/';

    /**
     * Data Imported
     *
     * @var array
     */
    protected $data = [];

    /**
     * Class Name Helper
     *
     * @return bool|string
     */
    public static function getClassName()
    {
        return (substr(static::class, strrpos(static::class, '\\') + 1));
    }

    /**
     * Base constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * The Name of this method
     *
     * @return string
     */
    public static abstract function name(): string;

    /**
     * Few words to tell me what is this about
     *
     * @return string
     */
    public static abstract function description(): string;

    /**
     * Documentation Location
     *
     * @return string
     */
    public static abstract function docs(): string;

    /**
     * Get all required parameters
     * ['key' => ['type', (optional) value]]
     * type: number, string, required, regex, within
     * value: (string)regex, (array)within
     * @return array
     */
    public static abstract function parameters(): array;

    /**
     * General Validate method, override if needed.
     *
     * @return bool
     */
    public function validate(): bool
    {
        foreach ($this->parameters() as $key => $value) {
            switch ($value[0]) {
                case 'number':
                    if (!is_numeric($this->data[$key])) return false;
                    break;
                case 'required':
                    if (!isset($this->data[$key])) return false;
                    break;
                case 'regex':
                    if (!preg_match($value[1], $this->data[$key])) return false;
                    break;
                case 'within':
                    if (!in_array($this->data[$key], $value[1])) return false;
                default:
                    return false;
            }
        }
        return true;
    }

    /**
     * Return Composed method, use $this->data to get all required parameter defined in parameter
     * No need to add baseUrl
     * @return string
     */
    protected abstract function compose(): string;

    /**
     * Exit Gateway, Get things done!
     *
     * @return string
     */
    public function getComposedUrl(): string
    {
        if ($this->validate()) {
            return $this->baseUrl . $this->compose();
        }

        return '';
    }
}