<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 上午11:35
 */

namespace Utils;


class ClassUtils
{
    /**
     * Find and load!
     *
     * @param $namespace
     * @param $class
     * @return array
     */
    public static function findSpecificClassUnderANamespace($namespace, $class)
    {
        $qualified = $namespace . '\\' . $class;
        $classes = (include __DIR__ . "/../../vendor/composer/autoload_classmap.php");
        if (isset($classes[$qualified]) && $class !== 'Base') {
            return [$qualified, $classes[$qualified]];
        }
        return [];
    }

    /**
     * Init Class
     *
     * @param $path
     * @param $class
     * @param $init
     * @return mixed
     */
    public static function initSpecificClass($path, $class, $init)
    {
        require_once $path;
        return new $class($init);
    }

    /**
     * Parse Compose Class
     *
     * @param $class
     * @return array
     */
    public static function getComposeClassInfo($class)
    {
        if (strpos($class, '\\') === false) {
            $class = 'Compose\\' . $class;
        }
        return [
            'identification' => $class::getClassName(),
            'name' => $class::name(),
            'description' => $class::description(),
            'docs' => $class::docs(),
            'parameters' => $class::parameters(),
        ];
    }
}