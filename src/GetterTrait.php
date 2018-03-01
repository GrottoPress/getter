<?php
declare (strict_types = 1);

namespace GrottoPress\Getter;

use Exception;

trait GetterTrait
{
    /**
     * @return mixed
     */
    final public function __get(string $attribute)
    {
        if (!\property_exists(static::class, $attribute)) {
            throw new Exception("'{$attribute}' attribute does not exist.");
        }

        return $this->{"get{$attribute}"}();
    }
}
