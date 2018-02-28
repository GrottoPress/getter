<?php

/**
 * Getter trait
 *
 * Get private attributes of an object directly,
 * without calling getter methods.
 *
 * @package GrottoPress\Getter
 * @since 0.3.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

declare (strict_types = 1);

namespace GrottoPress\Getter;

use Exception;

/**
 * Getter trait
 *
 * @since 0.3.0
 */
trait GetterTrait
{
    /**
     * Get attribute
     *
     * @var string $attribute Name of attribute to get
     *
     * @since 0.3.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function __get(string $attribute)
    {
        if (!\property_exists(static::class, $attribute)) {
            throw new Exception("'{$attribute}' attribute does not exist.");
        }

        return $this->{"get{$attribute}"}();
    }
}
