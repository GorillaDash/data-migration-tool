<?php
namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class Model
 *
 * @package GorillaDash\DataMigrationTool\Models
 */

use GorillaDash\DataMigrationTool\Utils\Str;

/**
 * Class Model
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
abstract class Model
{
    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field;

    /**
     * Media constructor
     *
     * @param array $attributes
     */
    public function __construct($attributes)
    {
        $this->fill($attributes);
    }

    /**
     * Fill all attributes to model
     *
     * @param array $attributes
     */
    public function fill($attributes)
    {
        foreach ($attributes as $key => $value) {
            $name = Str::toCamelCase($key);
            if ($this->hasProperty($name)) {
                $this->{$name} = $value;
            }
        }
    }

    /**
     * Make a query string
     *
     * @return string
     */
    public function toQuery()
    {
        $parameters = implode(',', $this->buildParameters());
        return <<<EOF
        mutation { {$this->field}($parameters) }
EOF;
    }

    /**
     * Get the instance as an array.
     *
     * @return mixed
     */
    abstract public function toArray();

    /**
     * @param $name
     *
     * @return bool
     */
    private function hasProperty($name)
    {
        return property_exists($this, $name);
    }

    /**
     * Build all parameters
     *
     * @return array
     */
    private function buildParameters()
    {
        $parameters = $this->toArray();
        return array_map(function ($key, $value) {
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
                return "{$key}: $value";
            }

            if (is_int($value) || is_float($value)) {
                return "{$key}: $value";
            }
            
            return "{$key}: \"{$value}\"";
        }, array_keys($parameters), $parameters);
    }
}
