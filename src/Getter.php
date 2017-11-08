<?php

/**
 * Getter.
 *
 * Get private attributes of an object directly,
 * without calling getter methods.
 *
 * @package GrottoPress\Getter
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

declare (strict_types = 1);

namespace GrottoPress\Getter;

use Exception;

/**
 * Getter
 *
 * @since 0.1.0
 */
trait Getter
{
    /**
     * Get attribute
     *
     * @var string $attribute Name of attribute to get
     *
     * @since 0.1.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function __get(string $attribute)
    {
        if (!\property_exists(static::class, $attribute)) {
            throw new Exception("'$attribute' attribute does not exist.");
        }

        return $this->{"get$attribute"}();
    }
}
