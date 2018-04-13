<?php

namespace GorillaDash\DataMigrationTool\Utils;

/**
 * Class Str
 *
 * @package GorillaDash\DataMigrationTool\Utils
 */
class Str
{
    /**
     * Word to camel case
     *
     * @param $word
     *
     * @return string
     */
    public static function toCamelCase($word) {
        return lcfirst(str_replace(' ', '', ucwords(strtr($word, '_-', ' '))));
    }
}
